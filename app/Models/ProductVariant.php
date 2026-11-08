<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/** @return BelongsTo<Product, $this> */
class ProductVariant extends Model
{
    protected $fillable = [
        'product_id',
        'size',
        'sku',
        'stock',
    ];

    public function product(): BelongsTo
    {
        // una variante appartiene a un prodotto
        return $this->belongsTo(Product::class);
    }
}
