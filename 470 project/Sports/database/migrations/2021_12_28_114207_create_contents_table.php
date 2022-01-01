<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            
            $table->string('contentTitle')->nullable();
            $table->string('publishingDate')->nullable();
            $table->string('author')->nullable();
            $table->string('featureType')->nullable();
            $table->string('category')->nullable();
            $table->string('contentText')->nullable();
            $table->string('images')->nullable();

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
        Schema::dropIfExists('contents');
    }
}
