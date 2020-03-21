<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
        return $this->hasOne(Book::Class);
    }

    public function member()
    {
        return $this->hasOne(Member::Class);
    }
}
