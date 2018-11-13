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
        DB::table("furniture_furniture_set")->insert([
            "furniture_id" => 1,
            "furniture_set_id" => 1
        ]);
    }
}
