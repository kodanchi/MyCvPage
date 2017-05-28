<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQulSkillsAwardsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->longText('des');
            $table->integer('percent')->unsigned();
            $table->integer('cv_id')->unsigned();


            $table->foreign('cv_id')->references('cv_id')->on('cvs')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('skills', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->integer('percent')->unsigned();
            $table->integer('cv_id')->unsigned();


            $table->foreign('cv_id')->references('cv_id')->on('cvs')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::create('awards', function($table)
        {
            $table->increments('id');
            $table->string('title');
            $table->longText('des');
            $table->string('from_date');
            $table->string('to_date');
            $table->string('from');
            $table->string('city');
            $table->string('country');
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
