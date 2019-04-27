<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additions', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('stone_id')->unsigned();
            $table->foreign('stone_id')->references('id')->on('stones')->onDelete('CASCADE');

            $table->string('title');
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
        Schema::dropIfExists('additions');
    }
}
