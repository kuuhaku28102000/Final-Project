<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DBskillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('skill')->insert([
            ["name"=>"Java"],
            ["name"=>"PHP"],
            ["name"=>"C"]

        ]);
    }
}
