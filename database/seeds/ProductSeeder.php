<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            'name' => 'Product 1',
            'category_id' => 1,
            'price' => 100.00,
            'description' => "Product 1 description",
            'created_at' => now()
        ]);

        Product::insert([
            'name' => 'Product 1',
            'category_id' => 2,
            'price' => 200.00,
            'description' => "Product 2 description",
            'created_at' => now()
        ]);

        Product::insert([
            'name' => 'Product 3',
            'category_id' => 3,
            'price' => 300.00,
            'description' => "Product 3 description",
            'created_at' => now()
        ]);

        Product::insert([
            'name' => 'Product 4',
            'category_id' => 4,
            'price' => 400.00,
            'description' => "Product 4 description",
            'created_at' => now()
        ]);

        Product::insert([
            'name' => 'Product 5',
            'category_id' => 5,
            'price' => 500.00,
            'description' => "Product 5 description",
            'created_at' => now()
        ]);

        Product::insert([
            'name' => 'Product 6',
            'category_id' => 6,
            'price' => 600.00,
            'description' => "Product 6 description",
            'created_at' => now()
        ]);

    }
}
