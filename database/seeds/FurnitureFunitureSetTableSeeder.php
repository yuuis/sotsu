<?php

use Illuminate\Database\Seeder;

class FurnitureFunitureSetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("furniture_set_furnitures")->insert([
            "furnitures_id" => 1,
            "furniture_set_id" => 1
        ]);
        DB::table("furniture_set_furnitures")->insert([
            "furnitures_id" => 2,
            "furniture_set_id" => 1
        ]);
        DB::table("furniture_set_furnitures")->insert([
            "furnitures_id" => 3,
            "furniture_set_id" => 1
        ]);
        DB::table("furniture_set_furnitures")->insert([
            "furnitures_id" => 4,
            "furniture_set_id" => 1
        ]);
        DB::table("furniture_set_furnitures")->insert([
            "furnitures_id" => 5,
            "furniture_set_id" => 1
        ]);
        DB::table("furniture_set_furnitures")->insert([
            "furnitures_id" => 6,
            "furniture_set_id" => 1
        ]);
        DB::table("furniture_set_furnitures")->insert([
            "furnitures_id" => 7,
            "furniture_set_id" => 1
        ]);
        DB::table("furniture_set_furnitures")->insert([
            "furnitures_id" => 8,
            "furniture_set_id" => 1
        ]);
    }
}
