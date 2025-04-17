<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Meal', 'image' => 'electronics.jpg', 'status' => 1],
            ['name' => 'Burger', 'image' => 'clothing.jpg', 'status' => 1],
            ['name' => 'Fries', 'image' => 'books.jpg', 'status' => 1],
            ['name' => 'Mandi', 'image' => 'furniture.jpg', 'status' => 0],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}