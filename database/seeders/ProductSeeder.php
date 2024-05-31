<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
$products = [
            [
                'name' => 'Product 1',
                'description' => 'Description of product 1',
                'price' => 1000,
                'stock' => 10,
                'category' => 'Category 1',
                'status' => 1,
                'thumb' => 'https://via.placeholder.com/150',
                'images' => '["https://via.placeholder.com/150", "https://via.placeholder.com/150"]',
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description of product 2',
                'price' => 2000,
                'stock' => 20,
                'category' => 'Category 2',
                'status' => 1,
                'thumb' => 'https://via.placeholder.com/150',
                'images' => '["https://via.placeholder.com/150", "https://via.placeholder.com/150"]',
            ],
            [
                'name' => 'Product 3',
                'description' => 'Description of product 3',
                'price' => 3000,
                'stock' => 30,
                'category' => 'Category 3',
                'status' => 1,
                'thumb' => 'https://via.placeholder.com/150',
                'images' => '["https://via.placeholder.com/150", "https://via.placeholder.com/150"]',
            ],
        ];

        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }
    }
}
