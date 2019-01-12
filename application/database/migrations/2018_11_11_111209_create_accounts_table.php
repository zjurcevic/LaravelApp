<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->char('account_number', 10);
            $table->char('account_iban', 21)->unique();
            $table->string('account_currency', 3);
            $table->string('account_type', 20);
            $table->decimal('account_limit', 19, 15);
            $table->decimal('account_interest', 4, 2);
            $table->decimal('account_balance', 35, 15);
            $table->date('account_openDate');
            $table->date('account_closeDate')->nullable();
            $table->unsignedInteger('person_id');
            $table->foreign('person_id')->references('id')->on('people');
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
        Schema::drop('accounts');
    }
}
