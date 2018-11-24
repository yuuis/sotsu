<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CretateInitialSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 不動産会社
        Schema::create('estate_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('homepage');
            $table->string('phone_number');
            $table->timestamps();
        });

        // 不動産と部屋の中間テーブル
        Schema::create('company_room', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_id');
            $table->string('room_id');
            $table->timestamps();
        });

        // 部屋
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('floor_plan');
            $table->timestamps();
        });

        // 部屋の画像
        Schema::create('room_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_path');
            $table->integer('room_id');
            $table->timestamps();
        });

        // 不動産の店舗
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('open_time');
            $table->string('close_time');
            $table->string('open_day');
            $table->timestamps();
        });

        // 家具
        Schema::create('furnitures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('purchase_price');
            $table->integer('rental_price');
            $table->string('furniture_category_id');
            $table->integer('height');
            $table->integer('width');
            $table->integer('length');
            $table->timestamps();
        });

        // 家具のカテゴリ
        Schema::create('furniture_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        // 家具の画像
        Schema::create('furniture_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_path');
            $table->string('furnitures_id');
            $table->timestamps();
        });

        // 家具セット
        Schema::create('furniture_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        // 家具と家具セットの中間テーブル
        Schema::create('furniture_set_furnitures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('furnitures_id');
            $table->string('furniture_set_id');
            $table->timestamps();
        });

        // 部屋と家具セットの中間テーブル
        Schema::create('room_furniture_set', function (Blueprint $table) {
            $table->increments('id');
            $table->string('room_id');
            $table->string('furniture_set_id');
            $table->string('fsf_path');
            $table->timestamps();
        });

        // ユーザ
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('gender');
            $table->string('email');
            $table->string('phone_number');
            $table->string('credit_card');
            $table->string('expired_date');
            $table->timestamps();
        });

        // 予約
        Schema::create('reserves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('room_id');
            $table->string('store_id');
            $table->string('furniture_set_id');
            $table->date('enter_date');
            $table->datetime('visit_datetime');
            $table->timestamps();
        });

        Schema::create('moving_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('homepage');
            $table->string('address');
            $table->string('phone_number');
            $table->timestamps();
        });

        Schema::create('deliver_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('homepage');
            $table->string('address');
            $table->string('phone_number');
            $table->timestamps();
        });

        Schema::create('furniture_company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('homepage');
            $table->string('address');
            $table->string('phone_number');
            $table->timestamps();
        });

        Schema::create('moving_storehouse', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('phone_number');
            $table->timestamps();
        });

        Schema::create('tags', function (Blueprint $table) {
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
        Schema::dropIfExists('company_room');
        Schema::dropIfExists('rooms');
        Schema::dropIfExists('room_images');
        Schema::dropIfExists('stores');
        Schema::dropIfExists('furnitures');
        Schema::dropIfExists('furniture_categories');
        Schema::dropIfExists('furniture_images');
        Schema::dropIfExists('furniture_sets');
        Schema::dropIfExists('furniture_set_furnitures');
        Schema::dropIfExists('room_furniture_set');
        Schema::dropIfExists('users');
        Schema::dropIfExists('reserves');
    }
}
