<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('users'); 

            $table->unsignedInteger('owner_sticker_id');
            $table->foreign('owner_sticker_id')->references('id')->on('stickers'); 

            $table->unsignedInteger('trader_id');
            $table->foreign('trader_id')->references('id')->on('users'); 

            $table->unsignedInteger('trader_sticker_id')->nullable();
            $table->foreign('trader_sticker_id')->references('id')->on('stickers');
            
            $table->boolean('tradeNotify')->default(false);
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('trades');
    }
}
