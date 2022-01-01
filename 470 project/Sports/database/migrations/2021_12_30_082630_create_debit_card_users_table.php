<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebitCardUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debit_card_users', function (Blueprint $table) {
            $table->id();
            $table->string('fName')->nullable();
            $table->string('lName')->nullable();
            $table->string('email')->nullable();
            $table->string('date')->nullable();
            $table->string('cardNumber')->nullable();
            $table->string('postalCode')->nullable();
            $table->string('securityCode')->nullable();
            $table->string('expire_date')->nullable();
            $table->string('status')->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('debit_card_users');
    }
}
