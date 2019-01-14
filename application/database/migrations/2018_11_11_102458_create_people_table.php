<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->char('person_oib', 11)->unique();
            $table->string('person_firstName');
            $table->string('person_lastName');
            $table->char('person_sex', 1);
            $table->date('person_dob');
            $table->string('person_telephone', 20)->unique();
            $table->string('person_email', 30)->unique();
            $table->string('person_address', 50);
            $table->unsignedInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
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
        Schema::drop('people');
    }
}
