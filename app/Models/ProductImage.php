<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class ProductImage extends Model
{
    protected $fillable = [
        'product_id',
        'path',
        'alt',
        'position',
    ];

    /** @return BelongsTo<Product, $this> */
    public function product(): BelongsTo
    {
        // un'immagine appartiene a un prodotto
        return $this->belongsTo(Product::class);
    }

    // aggiunge "url" al JSON inviato a React (di default ci sono solo le colonne del db)
    protected $appends = ['url'];

    // accessor: crea il campo calcolato $image->url, non salvato nel db
    // path = dove sta il file sul disco, url = dove lo trova il browser
    /** @return Attribute<string, never> */
    protected function url(): Attribute
    {
        // "products/cup-01.webp" → "/storage/products/cup-01.webp"
        return Attribute::get(fn () => Storage::url($this->path));
    }
}
