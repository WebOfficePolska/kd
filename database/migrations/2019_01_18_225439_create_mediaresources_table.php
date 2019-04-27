<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaresourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediaresources', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('stone_id')->unsigned();
            $table->foreign('stone_id')->references('id')->on('stones')->onDelete('CASCADE');

            $table->string('title');
            $table->string('filename');
            $table->string('filename_thumb')->nullable();
            $table->string('filepath');
            
            $table->integer('filetype_id')->unsigned();
            $table->foreign('filetype_id')->references('id')->on('filetypes');

            $table->integer('filecategory_id')->unsigned();
            $table->foreign('filecategory_id')->references('id')->on('filecategories');

            $table->integer('sort')->nullable();


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
        Schema::dropIfExists('mediaresources');
    }
}
