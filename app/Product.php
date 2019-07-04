<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'product_sku',
        'product_category_id',
        'product_brand_id',
        'homepage_priority',
        'product_price',
        'product_description',
    ];

    public function product_category()
    {
        return $this->belongsTo('App\Category', 'product_category_id');
    }

    public function product_brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function product_images()
    {
        return $this->hasOne('App\Image');
    }

    public function featured_image() {
        return $this->product_images()->where('featured_image','=', 1);
    }
}
