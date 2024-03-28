<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use database\Factories\ProductFactory;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Book', 'price' => 100, 'description' => 'Book']);
        Product::create(['name' => 'pen', 'price' => 100, 'description' => 'pen']);
        Product::create(['name' => 'book', 'price' => 333, 'description' => 'book']);
        Product::create(['name' => 'water', 'price' => 44, 'description' => 'water']);
        Product::create(['name' => 'TV', 'price' => 55536, 'description' => 'TV']);
    }
}
