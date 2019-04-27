<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionStoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_stone', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('collection_id')->unsigned();
            $table->foreign('collection_id')->references('id')->on('collections')->onDelete('CASCADE');

            $table->integer('stone_id')->unsigned();
            $table->foreign('stone_id')->references('id')->on('stones')->onDelete('CASCADE');

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
        Schema::dropIfExists('collection_stone');
    }
}
