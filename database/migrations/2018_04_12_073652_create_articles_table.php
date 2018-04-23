<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('title', 100);
            $table->longText('content');
            $table->string('source', 20);
            $table->tinyInteger('media_type')->default(0);
            $table->integer('category');
            $table->integer('views')->default(0);
            $table->integer('share_times')->default(0);
            $table->string('tags', 100)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
