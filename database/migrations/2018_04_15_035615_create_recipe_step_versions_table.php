<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeStepVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_step_versions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('recipe_id');
            $table->tinyInteger('step');
            $table->string('instruction', 800);
            $table->string('step_pictures', 500);
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
        Schema::dropIfExists('recipe_step_versions');
    }
}
