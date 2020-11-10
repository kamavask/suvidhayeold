<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $table = 'shopping_cart';

    protected $fillable = [
        'id', 'user_id', 'product_id'
    ];


    public function product()
    {
        return $this->belongsToMany('App\Models\Product');
    }
}
