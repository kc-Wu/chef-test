<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_versions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('name', 30);
            $table->string('recipe_no', 8);
            $table->string('description', 500)->nullable();
            $table->integer('chef_id');
            $table->string('poster', 100);
            $table->string('video', 100);
            $table->decimal('price');
            $table->integer('latest_editor');
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
        Schema::dropIfExists('recipe_versions');
    }
}
