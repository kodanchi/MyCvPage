<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustumHobbiesProfpicsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->longText('des');
            $table->integer('cv_id')->unsigned();
            $table->foreign('cv_id')->references('cv_id')->on('cvs')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('hobbies', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('icon');
            $table->longText('des');
            $table->integer('cv_id')->unsigned();
            $table->foreign('cv_id')->references('cv_id')->on('cvs')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::create('profile_pics', function($table)
        {
            $table->increments('id');
            $table->string('url');
            $table->integer('cv_id')->unsigned();
            $table->foreign('cv_id')->references('cv_id')->on('cvs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
