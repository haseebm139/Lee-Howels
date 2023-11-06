<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StockList;
use Faker\Generator;
use Slug;
use Str;
class BeSpokeMealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        $li = ['base', 'protein','vegetable','topping_extra'];
        for ($i=0; $i <30; $i++) {

            $list['name'] = $faker->name;
            $list['slug'] = Str::slug($list['name']);
            $list['meal_type'] =  $li[random_int(0, 3)];
            $list['cost_price_per_1000g'] = numberFormate(random_int(100, 1000),2);
            $list['serving_size_buffet_g'] = numberFormate(random_int(1, 1000),2);
            $list['cost_per_serving'] = numberFormate(random_int(100, 500),2);
            $list['cost_per_1g'] = numberFormate(random_int(1, 100),2);
            $list['item_cost'] = numberFormate(random_int(500, 1000),2);
            $list['yield_percentage'] = numberFormate(random_int(1, 100),2);
            $list['cal'] = numberFormate(random_int(22, 222),2);
            $list['carbs'] = numberFormate(random_int(22, 222),2);
            $list['fat'] = numberFormate(random_int(22, 222),2);
            $list['protein'] = numberFormate(random_int(22, 222),2);
            $list['image'] = 'documents/demo/'.random_int(1, 17).'.png';
            StockList::create($list);
        }
    }
}
