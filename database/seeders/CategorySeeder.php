<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            "Golf Shoes",
            "Basketball Shoes",
            "Men's Shoes",
            "Men\'s Washed T-Shirt",
        ];

        foreach ($categories as $categoryName) {
            Category::create(['name' => $categoryName]);
        }
    }
}
