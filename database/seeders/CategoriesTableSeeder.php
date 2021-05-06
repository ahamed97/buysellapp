<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'           => 'Dairy',
                'id'   =>  '1',
                'images' => '{"imgOne":"http://easybuyapp.ga/images/Dairy1.jpeg","imgTwo":"http://easybuyapp.ga/images/Dairy2.jpeg","imgThree":"http://easybuyapp.ga/images/Dairy3.jpg"}'
            ],
            [
                'name'           => 'Fish',
                'id'   =>  '2',
                'images' => '{"imgOne":"http://easybuyapp.ga/images/Fish1.jpg","imgTwo":"http://easybuyapp.ga/images/Fish2.jpg","imgThree":"http://easybuyapp.ga/images/Fish3.jpg"}'
            ],
            [
                'name'           => 'Vegitables',
                'id'   =>  '3',
                'images' => '{"imgOne":"http://easybuyapp.ga/images/Vegitables1.jpg","imgTwo":"http://easybuyapp.ga/images/Vegitables1.jpg","imgThree":"http://easybuyapp.ga/images/Vegitables1.jpg"}'
            ],
            [
                'name'           => 'Bakery Products',
                'id'   =>  '4',
                'images' => '{"imgOne":"http://easybuyapp.ga/images/BakeryProducts1.jpg","imgTwo":"http://easybuyapp.ga/images/BakeryProducts2.jpg","imgThree":"http://easybuyapp.ga/images/BakeryProducts3.jpg"}'
            ],
            [
                'name'           => 'Grocery Items',
                'id'   =>  '5',
                'images' => '{"imgOne":"http://easybuyapp.ga/images/GroceryItems1.jpg","imgTwo":"http://easybuyapp.ga/images/GroceryItems2.jpg","imgThree":"http://easybuyapp.ga/images/GroceryItems3.jpg"}'
            ],
            [
                'name'           => 'Services',
                'id'   =>  '6',
                'images' => '{"imgOne":"http://easybuyapp.ga/images/Services1.jpg","imgTwo":"http://easybuyapp.ga/images/Services2.jpg","imgThree":"http://easybuyapp.ga/images/Services3.jpg"}'
            ]
        ];

        Category::insert($data);
    }
}
