<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'customer_code', 'first_name', 'last_name', 'dob', 'phoneno', 'coupon_used', 
    ];

    public function user()
    {
        return $this->hasOne('App/Models/User', 'user_id');
    }
}
