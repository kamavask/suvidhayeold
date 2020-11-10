<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'user_id', 'product_id'
    ];

    protected $table = 'shopping_cart';

    public function product()
    {
        return $this->belongsToMany('App\Models\Product');
    }
}
