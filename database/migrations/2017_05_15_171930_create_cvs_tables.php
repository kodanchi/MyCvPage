<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('themes', function($table)
        {
            $table->increments('theme_id');
            $table->string('theme_name');
            $table->timestamps();


        });
        Schema::create('cvs', function($table)
        {
            $table->increments('cv_id');
            $table->longText('bio');
            $table->string('cv_name');

            $table->integer('theme_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('theme_id')->references('theme_id')->on('themes');
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
        Schema::drop('cvs');
        Schema::drop('themes');
    }
}
