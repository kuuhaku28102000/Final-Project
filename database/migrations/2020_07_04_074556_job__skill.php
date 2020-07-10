<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JobSkill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('job_skill', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idSkill')->unsigned();
            $table->foreign('idSkill')->references('id')->on('skill');
            $table->integer('idJob')->unsigned();
            $table->foreign('idJob')->references('id')->on('job');
            
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
        //
        Schema::drop('job_skill');
    }
}
