<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'type',
        'price',
    ];

    /** @return HasMany<ProductVariant, $this> */
    public function variants(): HasMany
    {
        // un prodotto ha molte varianti
        return $this->hasMany(ProductVariant::class);
    }

    /** @return HasMany<ProductImage, $this> */
    public function images(): HasMany
    {
        // un prodotto ha molte immagini
        return $this->hasMany(ProductImage::class);
    }
}
