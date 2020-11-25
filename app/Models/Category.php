<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
    'category_name', 'category_desc', 'category_type', 'slug', 'tags', 'pent_cat_id', 'created_at', 'updated_at'
    ];

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
}
