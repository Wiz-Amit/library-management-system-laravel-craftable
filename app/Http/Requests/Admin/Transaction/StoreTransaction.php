<?php

namespace App\Http\Requests\Admin\Transaction;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreTransaction extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.transaction.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'book' => ['required'],
            'member' => ['required'],
            'admin_user_id' => ['required'],
            'expiry' => ['required', 'date'],
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }

    public function getBookId(){
        if ($this->has('book')){
            return $this->get('book')['id'];
        }
        return null;
    }

    public function getMemberId(){
        if ($this->has('member')){
            return $this->get('member')['id'];
        }
        return null;
    }
}
