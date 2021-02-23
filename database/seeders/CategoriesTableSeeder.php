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
                'id'   =>  '1'
            ],
            [
                'name'           => 'Fish',
                'id'   =>  '2'
            ],
            [
                'name'           => 'Vegitables',
                'id'   =>  '3'
            ],
            [
                'name'           => 'Bakery Products',
                'id'   =>  '4'
            ],
            [
                'name'           => 'Grocery Items',
                'id'   =>  '5'
            ],
            [
                'name'           => 'Services',
                'id'   =>  '6'
            ]
        ];

        Category::insert($data);
    }
}
