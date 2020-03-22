<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\AdminAuth\Models\AdminUser;

class Transaction extends Model
{
    protected $fillable = [
        'book_id',
        'member_id',
        'admin_user_id',
        'expiry',

    ];


    protected $dates = [
        'expiry',
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/transactions/'.$this->getKey());
    }

    public function book()
    {
        return $this->belongsTo(Book::Class);
    }

    public function member()
    {
        return $this->belongsTo(Member::Class);
    }

    public function admin_user()
    {
        return $this->belongsTo(AdminUser::Class);
    }
}
