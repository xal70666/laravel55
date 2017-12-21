<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder
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
          DB::table('post')->insert([
            'title' => $faker->word,
            'body' => $faker->text,
            'user_id' => '1',
          ]);
        }
    }
}
