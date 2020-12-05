<?php

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class guitarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $guitar = [];

        foreach (range (1,20) as $index){
            $guitar[] = [
              'brand' => "brand $index",
              'price' => $faker->randomDigit(10000)* 999999,
              'created_at'=>now(),
              'updated_at'=>now(),
            ];
        }
        DB::table('guitar')->insert($guitar);
    }
}
