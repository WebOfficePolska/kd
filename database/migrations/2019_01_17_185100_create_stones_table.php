<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stones', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('stonetype_id')->unsigned();
            $table->foreign('stonetype_id')->references('id')->on('stonetypes');

            $table->string('title');
            $table->integer('sort_all')->nullable();
            $table->integer('sort_collection')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('thumbnail_path')->nullable();
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
        Schema::dropIfExists('stones');
    }
}
