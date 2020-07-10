<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCV extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('addCV', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('idJob')->unsigned();
            $table->foreign('idJob')->references('id')->on('Job');
            $table->integer('idStd')->unsigned();
            $table->text('name');
            $table->foreign('idStd')->references('id')->on('Student');
            $table->string('fileCV');
            $table->boolean('status')->default(false);
            
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
        Schema::drop('addCV');
    }
}
