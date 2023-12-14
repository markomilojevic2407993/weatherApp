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
        $amount = $this->command->getOutput()->ask('Koliko korisnika zelis uneti u DB', 1);
        $pass = $this->command->getOutput()->ask('Koja sifra treba biti', 123456789);
        $faker = Factory::create('SR_RS');

        for ($i = 0; $i < $amount; ++$i) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make($pass),
               ]);
        }
    }
}
