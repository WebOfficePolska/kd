<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finishes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('stone_id')->unsigned();
            $table->foreign('stone_id')->references('id')->on('stones')->onDelete('CASCADE');

            $table->boolean('polerowany')->nullable()->default(false);
            $table->boolean('szlifowany')->nullable()->default(false);
            $table->boolean('satynowany')->nullable()->default(false);
            $table->boolean('waterjet')->nullable()->default(false);
            $table->boolean('waterjet_piaskowany')->nullable()->default(false);
            $table->boolean('antykowany')->nullable()->default(false);
            $table->boolean('płomieniowany')->nullable()->nullable();
            $table->boolean('piaskowany')->nullable()->default(false);
            $table->boolean('płomieniowany_szczotkowany')->nullable()->default(false);
            $table->boolean('piaskowany_szczotkowany')->nullable()->default(false);
            $table->boolean('nacinany')->nullable()->default(false);
            $table->boolean('corteccia')->nullable()->default(false);
            $table->boolean('wenghe')->nullable()->default(false);
            $table->boolean('juta')->nullable()->default(false);            
            $table->boolean('wood')->nullable()->default(false);            
            $table->boolean('canvas')->nullable()->default(false);
            $table->boolean('tranche')->nullable()->default(false);
            $table->boolean('jodełka')->nullable()->default(false);

            //$table->timestamps();
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
