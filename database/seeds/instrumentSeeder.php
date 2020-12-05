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
        $instrument = [];

        foreach (range (1,20) as $index){
            $instrument[] = [
                'GuitarID'=> $faker->randomDigit(1) * 20,
                'type'=> $faker->name,
                'created_at'=>now(),
                'updated_at'=>now(),
            ];
        }
        DB::table('guitar')->insert($instrument);
    }
}
