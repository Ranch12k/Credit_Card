<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Make sure to import your User model
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Inserting 10 records into the _user_list table
        foreach (range(0, 3000) as $index) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'password' => bcrypt('password'), // Always hash passwords
            ]);
        }
    }
}
