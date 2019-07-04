<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'product_categories';

    protected $fillable = [
        'category_name',
        'parent_id',
        'category_description',
    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }
}
