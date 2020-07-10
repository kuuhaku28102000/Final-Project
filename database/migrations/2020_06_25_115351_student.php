<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Student', function (Blueprint $table) {
            $table->increments('id');
            $table->string('IDstudent')->unique();
            $table->string('name');

            
            // $table->string('User_name');
            $table->string('phone');
            $table->string('address');
            $table->date('birthday');
            $table->string('sex');
            $table->string('avatar');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            
            $table->rememberToken();
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
        Schema::drop('student');
    }
}
