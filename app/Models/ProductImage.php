<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/** @return BelongsTo<Product, $this> */
class ProductImage extends Model
{
    protected $fillable = [
        'product_id',
        'path',
        'alt',
        'position',
    ];

    public function product(): BelongsTo
    {
        // un'immagine appartiene a un prodotto
        return $this->belongsTo(Product::class);
    }
}
