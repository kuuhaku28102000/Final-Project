<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DBadminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0;$i<15;$i++){
            DB::table('admins')->insert([
                ["name"=>"Cung".Str::random(3),"email"=>Str::random(5)."@gmail.com","password"=>bcrypt('123456az')]
            ]);
        }
    }
}
