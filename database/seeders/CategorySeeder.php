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
            [
                'name' => 'Clothing',
                'count' => 47,
                'url' => 'https://themes.woocommerce.com/storefront/product-category/clothing/',
                'image' => 'https://themes.woocommerce.com/storefront/wp-content/uploads/sites/78/2014/09/clothing.jpg'
            ],
            [
                'name' => 'Kitchen',
                'count' => 28,
                'url' => 'https://themes.woocommerce.com/storefront/product-category/kitchen/',
                'image' => 'https://themes.woocommerce.com/storefront/wp-content/uploads/sites/78/2015/11/kitchen-category.jpg'
            ],
            [
                'name' => 'Electronics',
                'count' => 39,
                'url' => 'https://themes.woocommerce.com/storefront/product-category/electronics/',
                'image' => 'https://themes.woocommerce.com/storefront/wp-content/uploads/sites/78/2015/11/electronics-category.jpg'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
