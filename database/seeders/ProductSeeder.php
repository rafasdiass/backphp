<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Product Test 1',
            'price' => 9.99,
            'category_id' => 1, // ID da categoria associada ao produto
        ]);

        Product::create([
            'name' => 'Product Test 2',
            'price' => 14.99,
            'category_id' => 2, // ID da categoria associada ao produto
        ]);

        // Adicione mais produtos de teste, se necessário

        // ...
    }
}
