<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weather = [
            'Beograd' => 35,
            'Pancevo' => 40,
            'Subotica' => 38,
            'Novi Sad' => 35,
        ];
        foreach ($weather as $city => $celcius) {
            Weather::create([
                'city' => $city,
                'celcius' => $celcius,
            ]);
        }
    }
}
