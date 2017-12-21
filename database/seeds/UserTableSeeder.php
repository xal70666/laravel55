<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 10 ; $i++) {
          DB::table('users')->insert([
            'name' => $faker->userName,
            'email' => str_random(5).'@gmail.com',
            'password' => bcrypt('123456'),
          ]);
        }
    }
}
