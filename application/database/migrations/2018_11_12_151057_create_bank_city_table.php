<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_city', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');
            $table->unsignedInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->unsignedInteger('bank_id');
            $table->foreign('bank_id')->references('id')->on('banks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bank_city');
    }
}
