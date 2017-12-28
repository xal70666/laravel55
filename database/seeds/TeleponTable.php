<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeleponTable extends Seeder
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
          DB::table('telepon')->insert([
            'id_user' => $i,
            'telepon' => $faker->e164PhoneNumber,
          ]);
        }
    }
}
