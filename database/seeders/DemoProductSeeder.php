<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Faker\Generator;
use Slug;
use Str;
class DemoProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {


        for ($i=0; $i <11 ; $i++) {

            $category['name'] = $faker->name;
            $category['slug'] = Str::slug($category['name']);
            $category['image'] = 'documents/demo/'.random_int(1, 17).'.png';
            $categories = Category::create($category);
        }
        for ($i=0; $i <500 ; $i++) {
            $products['name'] = $faker->name;
            $products['title'] = $faker->name;
            $products['description'] = $faker->paragraph;

            $products['slug'] = Str::slug($products['name']);
            $products['category_id'] = random_int(1, 11);
            $products['price'] = random_int(100, 999);
            $products['cal'] = random_int(100, 999);
            $products['carbs'] = random_int(100, 999);
            $products['fat'] = random_int(100, 999);
            $products['protein'] = random_int(100, 999);
            $products['image'] = 'documents/demo/'.random_int(1, 17).'.png';

            $product = Product::create($products);
        }

    }
}
