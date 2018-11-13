<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("rooms")->insert([
            "name" => "八王子マンション",
            "address" => "東京都八王子市横川町",
        ]);
    }
}
