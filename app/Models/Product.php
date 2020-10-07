<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'cat_id');
    }

    public function description()
    {
        return $this->hasMany('App\Models\description');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\tax');
    }

    public function image()
    {
        return $this->belongsTo('App\Models\Image', 'image_id');
    }

    public function shipping()
    {
        return $this->belongsTo('App\Models\shipping', 'shipping_id');
    }
}
