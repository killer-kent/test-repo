<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $Faker =  Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
            \App\User::create([
                'name' => $Faker->firstName,
                'email' => $Faker->email,
                'password' => Hash::make('12345678'),
            ]);
        }
    }
}
