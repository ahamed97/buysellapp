<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
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
                'route'           => 'Godagama-Maharagama',
                'district_id'   =>  '5'
            ],
            [
                'route'           => 'Malabe-Colombo',
                'district_id'   =>  '5'
            ],
            [
                'route'           => 'Moratuwa-Colombo',
                'district_id'   =>  '5'
            ],
            [
                'route'           => 'Battaramulla-Dehiwala',
                'district_id'   =>  '5'
            ],
            [
                'route'           => 'Angoda-Colombo',
                'district_id'   =>  '5'
            ],
            [
                'route'           => 'Gampaha-Kelaniya',
                'district_id'   =>  '7'
            ],
            [
                'route'           => 'Wattala-Gampaha',
                'district_id'   =>  '7'
            ],
            [
                'route'           => 'Kiribathgoda-Kadawatha',
                'district_id'   =>  '7'
            ],
            [
                'route'           => 'Nittabuwa-Gampaha',
                'district_id'   =>  '7'
            ],
            [
                'route'           => 'Minuwangoda-Gampaha',
                'district_id'   =>  '7'
            ],
            [
                'route'           => 'Panadura-Kalutara',
                'district_id'   =>  '10'
            ],
            [
                'route'           => 'Kalutara-Horana',
                'district_id'   =>  '10'
            ],
            [
                'route'           => 'Matugama-Kalutara',
                'district_id'   =>  '10'
            ],
            [
                'route'           => 'Aluthgama-Kalutara',
                'district_id'   =>  '10'
            ],
            [
                'route'           => 'Bandaragama-Kalutara',
                'district_id'   =>  '10'
            ],
            [
                'route'           => 'Kalegana-Galle',
                'district_id'   =>  '6'
            ],
            [
                'route'           => 'Hikkaduwa Galle',
                'district_id'   =>  '6'
            ],
            [
                'route'           => 'Labuduwa-Galle',
                'district_id'   =>  '6'
            ],
            [
                'route'           => 'Koggala-Galle',
                'district_id'   =>  '6'
            ],
            [
                'route'           => 'Galle-Karapitiya',
                'district_id'   =>  '6'
            ],
            [
                'route'           => 'Katugastota-Kandy',
                'district_id'   =>  '11'
            ],
            [
                'route'           => 'Gampola-Kandy',
                'district_id'   =>  '11'
            ],
            [
                'route'           => 'Kadugannawa-Kandy',
                'district_id'   =>  '11'
            ],
            [
                'route'           => 'Kundasale-Kandy',
                'district_id'   =>  '11'
            ]
        ];

        Route::insert($data);
    }
}
