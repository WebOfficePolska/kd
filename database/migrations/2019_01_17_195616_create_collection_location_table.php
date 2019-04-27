<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_location', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('collection_id')->unsigned();
            $table->foreign('collection_id')->references('id')->on('collections');

            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations');


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
        Schema::dropIfExists('collection_location');
    }
}
