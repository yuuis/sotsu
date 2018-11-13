<?php

use Illuminate\Database\Seeder;

class FurnitureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("furnitures")->insert([
            "name" => "スタンダードベッド",
            "price" => 20000,
            "furniture_category_id" => 1
        ]);
    }
}
