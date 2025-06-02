<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $products = [
            [
                'name' => 'Woo Album #4',
                'price' => 9.00,
                'rating' => 5,
                'image' => 'https://themes.woocommerce.com/storefront/wp-content/uploads/sites/78/2013/06/cd_5_angle.jpg',
                'secondary_image' => 'https://themes.woocommerce.com/storefront/wp-content/uploads/sites/78/2013/06/cd_5_flat.jpg',
                'url' => 'https://themes.woocommerce.com/storefront/product/woo-album-4/',
                'type' => 'simple'
            ],
            [
                'name' => 'Happy Ninja',
                'price' => 18.00,
                'rating' => 5,
                'image' => 'https://themes.woocommerce.com/storefront/wp-content/uploads/sites/78/2013/06/T_7_front.jpg',
                'secondary_image' => 'https://themes.woocommerce.com/storefront/wp-content/uploads/sites/78/2013/06/T_7_back.jpg',
                'url' => 'https://themes.woocommerce.com/storefront/product/happy-ninja/',
                'type' => 'simple'
            ],
            [
                'name' => 'Ninja Silhouette',
                'price' => 20.00,
                'rating' => 5,
                'image' => 'https://themes.woocommerce.com/storefront/wp-content/uploads/sites/78/2013/06/T_5_front.jpg',
                'secondary_image' => 'https://themes.woocommerce.com/storefront/wp-content/uploads/sites/78/2013/06/T_5_back.jpg',
                'url' => 'https://themes.woocommerce.com/storefront/product/ninja-silhouette/',
                'type' => 'simple'
            ],
            [
                'name' => 'Patient Ninja',
                'price' => 35.00,
                'rating' => 4.67,
                'image' => 'https://themes.woocommerce.com/storefront/wp-content/uploads/sites/78/2013/06/hoodie_3_front.jpg',
                'secondary_image' => 'https://themes.woocommerce.com/storefront/wp-content/uploads/sites/78/2013/06/hoodie_3_back.jpg',
                'url' => 'https://themes.woocommerce.com/storefront/product/patient-ninja/',
                'type' => 'variable'
            ],
        ];

        $categoryIds = Category::pluck('id')->all();

        foreach ($products as $product) {
            Product::factory()
                ->withCategory($categoryIds)
                ->withName($product['name'])
                ->withPrice($product['price'])
                ->withRating($product['rating'])
                ->withImage($product['image'])
                ->withSecondaryImage($product['secondary_image'])
                ->withUrl($product['url'])
                ->withType($product['type'])
                ->create();
        }
    }
}
