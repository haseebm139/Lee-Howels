<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StockList;
use App\Models\Category;

class StockListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name'=>"VEGETABLES",
                'slug'=>"vegetables"
            ],
            [
                'name'=>"FRUITS",
                'slug'=>"fruits"
            ],
            [
                'name'=>"MEATS/PASTA/PROTEINS",
                'slug'=>"meats-pasta-proteins"
            ],
            [
                'name'=>"SEEDS & GRAINS ",
                'slug'=>"seeds-grains"
            ]
        ];
        foreach ($categories as $key => $value) {
            # code...
            Category::create($value);
        }
        $stock_list =  [

            [
              "category_id"=> 1,
              "item"=> "Adley Beans",
              "cost_price_per_1000g"=> 68,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 3.4,
              "cost_per_1g"=> 0.068
            ],
            [
              "category_id"=> 1,
              "item"=> "Anti-pasti (Bell pepper)",
              "cost_price_per_1000g"=> 169,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 8.5,
              "cost_per_1g"=> 0.169
            ],
            [
              "category_id"=> 1,
              "item"=> "Asparagus",
              "cost_price_per_1000g"=> 69,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 3.5,
              "cost_per_1g"=> 0.069
            ],
            [
              "category_id"=> 1,
              "item"=> "Avocado",
              "cost_price_per_1000g"=> 90,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 4.5,
              "cost_per_1g"=> 0.09
            ],
            [
              "category_id"=> 1,
              "item"=> "Beetroot",
              "cost_price_per_1000g"=> 69,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 3.5,
              "cost_per_1g"=> 0.069
            ],
            [
              "category_id"=> 1,
              "item"=> "Brocolli",
              "cost_price_per_1000g"=> 58,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 2.9,
              "cost_per_1g"=> 0.058
            ],
            [
              "category_id"=> 1,
              "item"=> "Carrot",
              "cost_price_per_1000g"=> 33,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 1.7,
              "cost_per_1g"=> 0.033
            ],
            [
              "category_id"=> 1,
              "item"=> "Cauliflower",
              "cost_price_per_1000g"=> 55,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 2.8,
              "cost_per_1g"=> 0.055
            ],
            [
              "category_id"=> 1,
              "item"=> "Chickpea",
              "cost_price_per_1000g"=> 59,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 3.0,
              "cost_per_1g"=> 0.059
            ],
            [
              "category_id"=> 1,
              "item"=> "Corn",
              "cost_price_per_1000g"=> 65,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 3.3,
              "cost_per_1g"=> 0.065
            ],
            [
              "category_id"=> 1,
              "item"=> "Cucumber",
              "cost_price_per_1000g"=> 27,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 1.4,
              "cost_per_1g"=> 0.027
            ],
            [
              "category_id"=> 1,
              "item"=> "Edamame",
              "cost_price_per_1000g"=> null,
              "yield_percentage"=> 59,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 3.0,
              "cost_per_1g"=> 0.059
            ],
            [
              "category_id"=> 1,
              "item"=> "Eggplant",
              "cost_price_per_1000g"=> 59,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 3.0,
              "cost_per_1g"=> 0.059
            ],
            [
              "category_id"=> 1,
              "item"=> "Green salad",
              "cost_price_per_1000g"=> 150,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 7.5,
              "cost_per_1g"=> 0.15
            ],
            [
              "category_id"=> 1,
              "item"=> "Kidney Beans",
              "cost_price_per_1000g"=> 70,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 3.5,
              "cost_per_1g"=> 0.07
            ],
            [
              "category_id"=> 1,
              "item"=> "Oringi mushroom",
              "cost_price_per_1000g"=> 55,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 2.8,
              "cost_per_1g"=> 0.055
            ],
            [
              "category_id"=> 1,
              "item"=> "Pumpkin",
              "cost_price_per_1000g"=> null,
              "yield_percentage"=> 42,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 2.1,
              "cost_per_1g"=> 0.042
            ],
            [
              "category_id"=> 1,
              "item"=> "Quinoa (black)",
              "cost_price_per_1000g"=> 367,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 18.4,
              "cost_per_1g"=> 0.367
            ],
            [
              "category_id"=> 1,
              "item"=> "Radishes",
              "cost_price_per_1000g"=> 129,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 6.5,
              "cost_per_1g"=> 0.129
            ],
            [
              "category_id"=> 1,
              "item"=> "Sweet Potato",
              "cost_price_per_1000g"=> 49,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 2.5,
              "cost_per_1g"=> 0.049
            ],
            [
              "category_id"=> 1,
              "item"=> "Tomato",
              "cost_price_per_1000g"=> 99,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 5.0,
              "cost_per_1g"=> 0.099
            ],
            [
              "category_id"=> 1,
              "item"=> "Zucchini",
              "cost_price_per_1000g"=> 99,
              "yield_percentage"=> 0,
              "actual_cost_price_per_1000g"=> 0,
              "serving_size_buffet_g"=> 50,
              "cost_per_serving"=> 5.0,
              "cost_per_1g"=> 0.099
            ],

            [
                "category_id"=> 2,
                "item"=> "Pineapple",
                "cost_price_per_1000g"=> 35,
                "yield_percentage"=> 0,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 50,
                "cost_per_serving"=> 1.8,
                "cost_per_1g"=> 0.035
            ],
            [
            "category_id"=> 2,
            "item"=> "Watermelon",
            "cost_price_per_1000g"=> 30,
            "yield_percentage"=> 0,
            "actual_cost_price_per_1000g"=> 0,
            "serving_size_buffet_g"=> 50,
            "cost_per_serving"=> 1.5,
            "cost_per_1g"=> 0.03
            ],
            [
            "category_id"=> 2,
            "item"=> "Mango",
            "cost_price_per_1000g"=> 25,
            "yield_percentage"=> 0,
            "actual_cost_price_per_1000g"=> 0,
            "serving_size_buffet_g"=> 50,
            "cost_per_serving"=> 1.3,
            "cost_per_1g"=> 0.025
            ],
            [
            "category_id"=> 2,
            "item"=> "Papaya",
            "cost_price_per_1000g"=> 40,
            "yield_percentage"=> 0,
            "actual_cost_price_per_1000g"=> 0,
            "serving_size_buffet_g"=> 50,
            "cost_per_serving"=> 2.0,
            "cost_per_1g"=> 0.04
            ],
            [
            "category_id"=> 2,
            "item"=> "Banana",
            "cost_price_per_1000g"=> 30,
            "yield_percentage"=> 0,
            "actual_cost_price_per_1000g"=> 0,
            "serving_size_buffet_g"=> null,
            "cost_per_serving"=> null,
            "cost_per_1g"=> null
            ],
            [
                "category_id"=> 3,
                "item"=> "Beef-Sirloin",
                "cost_price_per_1000g"=> 636,
                "yield_percentage"=> 20.00,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 50,
                "cost_per_serving"=> 31.8,
                "cost_per_1g"=> 0.636
              ],
              [
                "category_id"=> 3,
                "item"=> "Beef Mince",
                "cost_price_per_1000g"=> 526.8,
                "yield_percentage"=> 20.00,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 50,
                "cost_per_serving"=> 26.3,
                "cost_per_1g"=> 0.5268
              ],
              [
                "category_id"=> 3,
                "item"=> "Chicken",
                "cost_price_per_1000g"=> 87.6,
                "yield_percentage"=> 20.00,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 50,
                "cost_per_serving"=> 4.4,
                "cost_per_1g"=> 0.0876
              ],
              [
                "category_id"=> 3,
                "item"=> "Fish (Saba Smoked)",
                "cost_price_per_1000g"=> 958,
                "yield_percentage"=> 20.00,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 50,
                "cost_per_serving"=> 47.9,
                "cost_per_1g"=> 0.958
              ],
              [
                "category_id"=> 3,
                "item"=> "Fish Salmon",
                "cost_price_per_1000g"=> 949,
                "yield_percentage"=> 20.00,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 50,
                "cost_per_serving"=> 47.5,
                "cost_per_1g"=> 0.949
              ],
              [
                "category_id"=> 3,
                "item"=> "Fish Tilapia",
                "cost_price_per_1000g"=> 96,
                "yield_percentage"=> 20.00,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 50,
                "cost_per_serving"=> 12.0,
                "cost_per_1g"=> 0.24
              ],
              [
                "category_id"=> 3,
                "item"=> "Fish Tuna",
                "cost_price_per_1000g"=> 852,
                "yield_percentage"=> 20.00,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 50,
                "cost_per_serving"=> 42.6,
                "cost_per_1g"=> 0.852
              ],
              [
                "category_id"=> 3,
                "item"=> "Soba noodles (Japanese)",
                "cost_price_per_1000g"=> 167,
                "yield_percentage"=> 0,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 50,
                "cost_per_serving"=> 8.4,
                "cost_per_1g"=> 0.167
              ],
              [
                "category_id"=> 3,
                "item"=> "Spirulina Pasta",
                "cost_price_per_1000g"=> 480,
                "yield_percentage"=> 0,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 50,
                "cost_per_serving"=> 48.0,
                "cost_per_1g"=> 0.96
              ],
              [
                "category_id"=> 3,
                "item"=> "Tempeh",
                "cost_price_per_1000g"=> 234,
                "yield_percentage"=> 0,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 50,
                "cost_per_serving"=> 11.7,
                "cost_per_1g"=> 0.234
              ],
              [
                "category_id"=> 3,
                "item"=> "Egg",
                "cost_price_per_1000g"=> 80,
                "yield_percentage"=> 0,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 50,
                "cost_per_serving"=> 4.0,
                "cost_per_1g"=> 0.08
              ],
              [
                "category_id"=> 4,
                "item"=> "Brown rice",
                "cost_price_per_1000g"=> 33.8,
                "yield_percentage"=> 0,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 50,
                "cost_per_serving"=> 1.7,
                "cost_per_1g"=> 0.0338
             ],
              [
                "category_id"=> 4,
                "item"=> "Cashew nut",
                "cost_price_per_1000g"=> 257,
                "yield_percentage"=> 0,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 30,
                "cost_per_serving"=> 7.7,
                "cost_per_1g"=> 0.257
             ],
              [
                "category_id"=> 4,
                "item"=> "Chia Seed",
                "cost_price_per_1000g"=> 780,
                "yield_percentage"=> 0,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 30,
                "cost_per_serving"=> 23.4,
                "cost_per_1g"=> 0.78
             ],
              [
                "category_id"=> 4,
                "item"=> "Flaxseed",
                "cost_price_per_1000g"=> 236,
                "yield_percentage"=> 0,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 30,
                "cost_per_serving"=> 7.1,
                "cost_per_1g"=> 0.236
             ],
              [
                "category_id"=> 4,
                "item"=> "Pumpkin seed",
                "cost_price_per_1000g"=> 472,
                "yield_percentage"=> 0,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 30,
                "cost_per_serving"=> 14.2,
                "cost_per_1g"=> 0.472
             ],
              [
                "category_id"=> 4,
                "item"=> "Walnut",
                "cost_price_per_1000g"=> 444,
                "yield_percentage"=> 0,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 30,
                "cost_per_serving"=> 13.3,
                "cost_per_1g"=> 0.444
             ],
              [
                "category_id"=> 4,
                "item"=> "Riceberry",
                "cost_price_per_1000g"=> 63,
                "yield_percentage"=> 0,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 50,
                "cost_per_serving"=> 3.2,
                "cost_per_1g"=> 0.063
             ],
              [
                "category_id"=> 4,
                "item"=> "Sunflower",
                "cost_price_per_1000g"=> 350,
                "yield_percentage"=> 0,
                "actual_cost_price_per_1000g"=> 0,
                "serving_size_buffet_g"=> 30,
                "cost_per_serving"=> 10.5,
                "cost_per_1g"=> 0.35
             ],

        ];
        foreach ($stock_list as $key => $value) {
            # code...
            StockList::create($value);
        }

    }
}
