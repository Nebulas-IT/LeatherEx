<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeImage extends Model
{
    protected $fillable = [
        'image_title',
        'image_url',
        'image_slug',
        'image_position',
    ];
}
