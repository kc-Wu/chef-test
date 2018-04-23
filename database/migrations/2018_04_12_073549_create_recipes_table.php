<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();

            $table->string('name', 30);
            $table->string('recipe_no', 8);
            $table->string('description', 500)->nullable();
            $table->integer('chef_id');
            $table->string('source', 30)->nullable();
            $table->string('tags', 100)->default('');
            $table->string('poster', 100);
            $table->string('video', 100);
            $table->decimal('price');
            $table->float('average_rates')->nullable();
            $table->integer('comments')->default(0);
            $table->integer('sold')->default(0);
            $table->tinyInteger('state');
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
        Schema::dropIfExists('recipes');
    }
}
