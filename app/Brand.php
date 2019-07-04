<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'product_brands';

    protected $fillable = [
        'brand_name',
        'brand_description',
    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
