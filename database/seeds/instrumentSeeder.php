<?php

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class instrumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $products = [];

        foreach (range (1,20) as $index){
            $products[] = [
                'brand' => $faker->name,
                'type' => $faker->name,
            ];
        }
    }
}
