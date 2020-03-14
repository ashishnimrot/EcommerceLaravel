<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::insert([
            'name' => 'Category 1',
            'created_at' => now()
        ]);

        Category::insert([
            'name' => 'Category 2',
            'created_at' => now()
        ]);

        Category::insert([
            'name' => 'Category 3',
            'created_at' => now()
        ]);

        Category::insert([
            'name' => 'Category 4',
            'created_at' => now()
        ]);

        Category::insert([
            'name' => 'Category 5',
            'created_at' => now()
        ]);

        Category::insert([
            'name' => 'Category 6',
            'created_at' => now()
        ]);

    }
}
