<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDishPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dish_pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();

            $table->integer('dish_id');
            $table->string('picture', 100);
            $table->string('stamped_picture', 100);
            $table->string('source', 30);
            $table->decimal('price');
            $table->integer('sold')->default(0);
            $table->integer('uploader');
            $table->tinyInteger('state')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dish_pictures');
    }
}
