<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpEduProjTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('city')->nullable();
            $table->string('country')->nullable();

        });

        Schema::create('experiences', function($table)
        {
            $table->increments('id');
            $table->longText('des');
            $table->string('job_title');
            $table->string('from_date');
            $table->string('to_date');
            $table->string('company');
            $table->string('city');
            $table->string('country');
            $table->integer('cv_id')->unsigned();


            $table->foreign('cv_id')->references('cv_id')->on('cvs')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('educations', function($table)
        {
            $table->increments('id');
            $table->longText('des');
            $table->string('degree');
            $table->string('major');
            $table->string('from_date');
            $table->string('to_date');
            $table->string('university');
            $table->string('city');
            $table->string('country');
            $table->integer('cv_id')->unsigned();


            $table->foreign('cv_id')->references('cv_id')->on('cvs')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('projects', function($table)
        {
            $table->increments('id');
            $table->longText('des');
            $table->string('degree');
            $table->string('major');
            $table->string('from_date');
            $table->string('to_date');
            $table->string('university');
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
