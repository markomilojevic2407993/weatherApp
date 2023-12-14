<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class NewUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = $this->command->getOutput()->ask('Unesite ime za registraciju');
        $email = $this->command->getOutput()->ask('Unesite vas email');
        $pass = $this->command->getOutput()->ask('unesite vas password');
        if ($name === null || $email === null || $pass === null) {
            exit('niste uneli podatke');
        }

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($pass),
        ]);
    }
}
