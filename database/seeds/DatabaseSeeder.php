<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompanyTableSeeder::class);
        $this->call(RoomTableSeeder::class);
        $this->call(CompanyRoomTableSeeder::class);
        $this->call(FurnitureCategoryTableSeeder::class);
        $this->call(FurnitureTableSeeder::class);
        $this->call(FurnitureImageTableSeeder::class);
        $this->call(FurnitureSetTableSeeder::class);
        $this->call(FurnitureFunitureSetTableSeeder::class);
        $this->call(StoreTableSeeder::class);
    }
}
