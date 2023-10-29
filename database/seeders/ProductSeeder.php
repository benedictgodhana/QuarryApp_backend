<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
    
        // Seed sample data into the products table
        $products = [
            ['product_name' => 'Product 1', 'grade' => 'A', 'status' => 'Active'],
            ['product_name' => 'Product 2', 'grade' => 'B', 'status' => 'Inactive'],
            ['product_name' => 'Product 3', 'grade' => 'A', 'status' => 'Active'],
            // Add more sample data as needed
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
