<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->timestamps();

            $table->integer('user_id');
            $table->string('real_name', 20)->nullable();
            $table->string('head_picture', 100)->nullable();
            $table->tinyInteger('rank')->default(0);
            $table->string('organization', 20)->nullable();
            $table->string('position', 20)->nullable();
            $table->integer('province')->nullable();
            $table->integer('city')->nullable();
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
        Schema::dropIfExists('user_profiles');
    }
}
