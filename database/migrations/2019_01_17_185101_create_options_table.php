<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('stone_id')->unsigned();
            $table->foreign('stone_id')->references('id')->on('stones')->onDelete('CASCADE');

            $table->boolean('top')->nullable()->default(false);
            $table->boolean('floor')->nullable()->default(false);
            $table->boolean('wall')->nullable()->default(false);
            $table->boolean('upstairs')->nullable()->default(false);
            $table->boolean('bathroom')->nullable()->default(false);
            $table->boolean('fireplace')->nullable()->default(false);
            $table->boolean('windowsill')->nullable()->nullable();
            $table->boolean('outide')->nullable()->default(false);
            $table->boolean('frost')->nullable()->default(false);
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
        Schema::dropIfExists('options');
    }
}
