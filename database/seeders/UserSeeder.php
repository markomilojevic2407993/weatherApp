<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('SR_RS');

        for ($i = 0; $i < 500; ++$i) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('12345678'),
               ]);
        }
    }
}
