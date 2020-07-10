<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DBplaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('place')->insert([
            ["city"=>"Hồ Chí Minh"],
            ["city"=>"Hà Nội"],
            ["city"=>"Đà Nẵng"],
            ["city"=>"Manchester"]
        ]);
    }
}
