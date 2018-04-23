<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeIngredientVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_ingredient_versions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('recipe_id');
            $table->string('name', 20);
            $table->tinyInteger('ingredient_type');
            $table->string('amount', 20);
            $table->tinyInteger('display_order')->default(0);
            $table->integer('pre_pub_version')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe_ingredient_versions');
    }
}
