<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Cyber Keyboard',
            'description' => 'RGB mechanical keyboard with cyberpunk aesthetics',
            'price' => 129.99,
            'stock' => 50
        ]);

        Product::create([
            'name' => 'Neon Mouse',
            'description' => 'Precision gaming mouse with neon glow',
            'price' => 79.99,
            'stock' => 100
        ]);
    }
}
