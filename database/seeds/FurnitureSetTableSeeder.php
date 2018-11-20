<?php

use Illuminate\Database\Seeder;

class FurnitureSetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("furniture_sets")->insert([
            "name" => "モノクロ",
        ]);
    }
}
