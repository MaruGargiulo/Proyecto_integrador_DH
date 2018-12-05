<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStickersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stickers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('album_name');
            $table->string('sticker_number');
            $table->longText('description');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('user_id');
            $table->string('photopath')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');            
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stickers');
    }
}
