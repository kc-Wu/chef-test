<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('recipe_id');
            $table->tinyInteger('rate');
            $table->tinyInteger('user_id');
            $table->string('description', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe_rates');
    }
}
