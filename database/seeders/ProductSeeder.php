<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $products = [
            ['name' => 'Tee black', 'type' => 'tee', 'price' => 2500, 'sizes' => ['S', 'M', 'L', 'XL'], 'images' => 3],
            ['name' => 'Tee white', 'type' => 'tee', 'price' => 2500, 'sizes' => ['S', 'M', 'L', 'XL'], 'images' => 3],
            ['name' => 'Tee grey', 'type' => 'tee', 'price' => 2500, 'sizes' => ['S', 'M', 'L', 'XL'], 'images' => 3],
            ['name' => 'Cup', 'type' => 'clay', 'price' => 1600, 'sizes' => [null], 'images' => 3],
            ['name' => 'Pot', 'type' => 'clay', 'price' => 3200, 'sizes' => [null], 'images' => 3],
            ['name' => 'Holder', 'type' => 'clay', 'price' => 2400, 'sizes' => [null], 'images' => 3],
        ];

        foreach ($products as $data) {
            $slug = str($data['name'])->slug()->toString();

            $product = Product::create([
                'name' => $data['name'],
                'slug' => $slug,
                'description' => 'Descrizione di '.$data['name'],
                'type' => $data['type'],
                'price' => $data['price'],
            ]);

            // una variante per taglia; la ceramica ne ha una sola, con size null
            foreach ($data['sizes'] as $size) {
                $product->variants()->create([
                    'size' => $size,
                    'sku' => strtoupper($size ? "$slug-$size" : $slug),
                    'stock' => 10,
                ]);
            }

            // percorsi relativi al disco public: i file andranno in storage/app/public/products
            for ($i = 1; $i <= $data['images']; $i++) {
                $product->images()->create([
                    'path' => sprintf('products/%s-%02d.webp', $slug, $i),
                    'alt' => $data['name'],
                    'position' => $i,
                ]);
            }
        }
    }
}
