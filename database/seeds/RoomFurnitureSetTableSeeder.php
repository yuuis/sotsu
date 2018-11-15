<?php

use Illuminate\Database\Seeder;

class RoomFurnitureSetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("room_furniture_set")->insert([
            "room_id" => 1,
            "furniture_set_id" => 1,
            "fsf_path" => "storage/fsf_files/test_fsf"
        ]);
    }
}
