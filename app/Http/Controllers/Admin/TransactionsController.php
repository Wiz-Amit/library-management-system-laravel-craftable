<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Book;
use App\Models\Member;
use Illuminate\View\View;
use App\Models\Transaction;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Brackets\AdminAuth\Models\AdminUser;
use Brackets\AdminListing\Facades\AdminListing;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Auth\Access\AuthorizationException;
use App\Http\Requests\Admin\Transaction\IndexTransaction;
use App\Http\Requests\Admin\Transaction\StoreTransaction;
use App\Http\Requests\Admin\Transaction\UpdateTransaction;
use App\Http\Requests\Admin\Transaction\DestroyTransaction;
use App\Http\Requests\Admin\Transaction\BulkDestroyTransaction;

class TransactionsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexTransaction $request
     * @return array|Factory|View
     */
    public function index(IndexTransaction $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Transaction::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'book_id', 'member_id', 'admin_user_id', 'expiry'],

            // set columns to searchIn
            ['id'],

            function ($query) use ($request) {
                $query->with(['book', 'member', 'admin_user']);
                if($request->has('books')){
                    $query->whereIn('book_id', $request->get('books'));
                }
                if($request->has('members')){
                    $query->whereIn('member_id', $request->get('members'));
                }
            }

            // function ($query) use ($request) {
            //     $query->with(['member']);
            //     if($request->has('members')){
            //         $query->whereIn('member_id', $request->get('members'));
            //     }
            // }
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        // translate data
        // foreach ($data as $row) {
        //     // book name
        //     $book = Book::findOrFail($row->book_id);
        //     $row->book_id = $book->title;

        //     // memeber name
        //     $member = Member::findOrFail($row->member_id);
        //     $row->member_id = $member->name;

        //     // issuer name
        //     $issuer = AdminUser::findOrFail($row->admin_user_id);
        //     // dd($issuer);
        //     $row->admin_user_id = $issuer->first_name." (".$issuer->id.")";
        // }

        return view('admin.transaction.index', ['data' => $data, 'members' => Member::all(), 'books' => Book::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.transaction.create');

        return view('admin.transaction.create', ['books' => Book::all(), 'members' => Member::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTransaction $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreTransaction $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $sanitized['book_id'] = $request->getBookId();
        $sanitized['member_id'] = $request->getMemberId();

        // Store the Transaction
        $transaction = Transaction::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/transactions'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/transactions');
    }

    /**
     * Display the specified resource.
     *
     * @param Transaction $transaction
     * @throws AuthorizationException
     * @return void
     */
    public function show(Transaction $transaction)
    {
        $this->authorize('admin.transaction.show', $transaction);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Transaction $transaction
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Transaction $transaction)
    {
        $this->authorize('admin.transaction.edit', $transaction);

        return view('admin.transaction.edit', [
            'transaction' => $transaction,
            'books' => Book::all(),
            'members' => Member::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTransaction $request
     * @param Transaction $transaction
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateTransaction $request, Transaction $transaction)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $sanitized['book_id'] = $request->getBookId() ? $request->getBookId() : $request->book_id;
        $sanitized['member_id'] = $request->getMemberId() ? $request->getMemberId() : $request->member_id;

        // Update changed values Transaction
        $transaction->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/transactions'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/transactions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyTransaction $request
     * @param Transaction $transaction
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyTransaction $request, Transaction $transaction)
    {
        $transaction->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyTransaction $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyTransaction $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Transaction::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
