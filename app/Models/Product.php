<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'type',
        'price',
    ];

    public function variants()
    {
        // un prodotto ha molte varianti
        return $this->hasMany(ProductVariant::class);
    }

    public function images()
    {
        // un prodotto ha molte immagini
        return $this->hasMany(ProductImage::class);
    }
}
