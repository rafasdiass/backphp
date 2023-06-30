<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Category 1',
        ]);

        Category::create([
            'name' => 'Category 2',
        ]);

        // Adicione mais categorias, se necessário

        // ...
    }
}
