<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'prod_code', 'prod_name', 'category_id', 'brand', 'highlight', 'short_description', 'specification', 'image_id', 'dimensions', 'weight', 'size', 'virtual', 'downloadable', 'r_price', 's_price', 'variant_id', 'sku', 'stock', 'stock_alert', 'backorder', 'tax_id', 'shipping_id', 'bulk_order_no', 'tags', 'created_at', 'updated_at'
    ];

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

    public function flags()
    {
        return $this->belongsToMany('App\Models\Flag');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'shopping_cart');
    }

    /* public function shoppingcart()
    {
        return $this->belongsToMany('App\Models\ShoppingCart');
    } */
}
