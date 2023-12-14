<?php

namespace Database\Seeders;

use App\Models\WeatherUserModel;
use Illuminate\Database\Seeder;

class WeatherUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $city = $this->command->getOutput()->ask('Unesite grad');
        $cels = $this->command->getOutput()->ask('Unesite temperaturu');
        if ($city === null || $cels === null) {
            exit('Podaci nisu uneti');
        }

        WeatherUserModel::create([
            'city' => $city,
            'cels' => $cels,
        ]);
    }
}
