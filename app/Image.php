<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'product_id',
        'image_url',
        'featured_image',
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
