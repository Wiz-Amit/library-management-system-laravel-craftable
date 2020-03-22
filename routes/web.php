<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('books')->name('books/')->group(static function() {
            Route::get('/',                                             'BooksController@index')->name('index');
            Route::get('/create',                                       'BooksController@create')->name('create');
            Route::post('/',                                            'BooksController@store')->name('store');
            Route::get('/{book}/edit',                                  'BooksController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BooksController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{book}',                                      'BooksController@update')->name('update');
            Route::delete('/{book}',                                    'BooksController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('books')->name('books/')->group(static function() {
            Route::get('/',                                             'BooksController@index')->name('index');
            Route::get('/create',                                       'BooksController@create')->name('create');
            Route::post('/',                                            'BooksController@store')->name('store');
            Route::get('/{book}/edit',                                  'BooksController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BooksController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{book}',                                      'BooksController@update')->name('update');
            Route::delete('/{book}',                                    'BooksController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('members')->name('members/')->group(static function() {
            Route::get('/',                                             'MembersController@index')->name('index');
            Route::get('/create',                                       'MembersController@create')->name('create');
            Route::post('/',                                            'MembersController@store')->name('store');
            Route::get('/{member}/edit',                                'MembersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MembersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{member}',                                    'MembersController@update')->name('update');
            Route::delete('/{member}',                                  'MembersController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('transactions')->name('transactions/')->group(static function() {
            Route::get('/',                                             'TransactionsController@index')->name('index');
            Route::get('/create',                                       'TransactionsController@create')->name('create');
            Route::post('/',                                            'TransactionsController@store')->name('store');
            Route::get('/{transaction}/edit',                           'TransactionsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TransactionsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{transaction}',                               'TransactionsController@update')->name('update');
            Route::delete('/{transaction}',                             'TransactionsController@destroy')->name('destroy');
        });
    });
});
