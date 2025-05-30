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
                'title' => 'Jordan Air Rev',
                'image' => 'https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/h_359,c_limit/fdbe1608-f6f1-4451-9025-adb6197dd010/jordan-air-rev-golf-shoes-jgWN39.png',
            ],
            [
                'title' => "Luka 4 PF 'Bloodline'",
                'image' => 'https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/h_359,c_limit/0b1450cb-c30a-4660-ab00-d30a4fea38f4/luka-4-pf-bloodline-basketball-shoes-kQvxZx.png',
            ],
            [
                'title' => 'Air Jordan Mule',
                'image' => 'https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/h_359,c_limit/e207f0ee-138d-4d9b-9e01-c712d4c85f0b/air-jordan-mule-golf-shoes-RHRFBC.png',
            ],
            [
                'title' => 'Jordan CMFT Era',
                'image' => 'https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/h_359,c_limit/222ae0d1-043e-448a-989c-7b618939d99b/jordan-cmft-era-shoes-Q6k4Bx.png',
            ],
            [
                'title' => 'Luka .77 PF',
                'image' => 'https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/h_359,c_limit/d8bcafc0-a855-4b99-9e76-7c803212d41f/luka-77-pf-basketball-shoes-MlPLwJ.png',
            ],
            [
                'title' => "Luka 4 PF 'Space Navigator'",
                'image' => 'https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/h_359,c_limit/8ec119c9-572d-41f9-a818-0d5287fec181/luka-4-pf-space-navigator-basketball-shoes-kQvxZx.png',
            ],
            [
                'title' => 'Air Jordan 1 Low',
                'image' => 'https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/h_359,c_limit/521e4f76-da9f-4bca-811a-ded826b65613/air-jordan-1-low-shoes-6Q1tFM.png',
            ],
            [
                'title' => 'Jordan Flight Essentials 85',
                'image' => 'https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/h_359,c_limit/3d66431e-daa3-4e0e-8dfc-31a053f4c564/jordan-flight-essentials-85-washed-t-shirt-SQrs1M.png',
            ],
            [
                'title' => 'Air Jordan 1 Mid',
                'image' => 'https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/h_359,c_limit/7dede8f7-6589-447c-8e2f-63f9a739fb1f/air-jordan-1-mid-shoes-SQf7DM.png',
            ],
        ];

        $categoryIds = Category::pluck('id')->all();

        foreach ($products as $product) {
            Product::factory()
                ->withCategory($categoryIds)
                ->withTitle($product['title'])
                ->withImage($product['image'])
                ->create();
        }
    }
}
