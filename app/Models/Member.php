<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'type',
        'name',
        'phone',
        'email',
        'address_l1',
        'address_l2',
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
        return url('/admin/members/'.$this->getKey());
    }
}
