<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Job extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Job', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            
            
            $table->integer('salary');
            $table->text('address');
            $table->string('skill');
            $table->text('detail');
            $table->text('Require');
            $table->text('Benefit');
            
            $table->integer('idCompany')->unsigned();
            $table->foreign('idCompany')->references('id')->on('Company');
            $table->date('DeadLine');
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
        Schema::drop('Job');
        //
    }
}
