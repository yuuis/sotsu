<?php

use Illuminate\Database\Seeder;

class EstateCompanyRoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("estate_company_room")->insert([
            "company_id" => 1,
            "room_id" => 1
        ]);
    }
}
