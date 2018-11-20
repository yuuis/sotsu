<?php

use Illuminate\Database\Seeder;

class FurnitureCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("furniture_categories")->insert([
            "name" => "ベッド",
        ]);
    }
}
