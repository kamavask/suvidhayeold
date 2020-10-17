<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function descriptions()
    {
        return $this->hasMany('App\Models\Description');
    }

    public function taxes()
    {
        return $this->belongsTo('App\Models\Tax');
    }

    public function shippingclasses()
    {
        return $this->belongsTo('App\Models\ShippingClass');
    }

    public function product_images()
    {
        return $this->hasOne('App\Models\ProductImage');
    }
}
