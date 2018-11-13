<?php

use Illuminate\Database\Seeder;

class CompanyRoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("company_room")->insert([
            "company_id" => 1,
            "room_id" => 1
        ]);
    }
}
