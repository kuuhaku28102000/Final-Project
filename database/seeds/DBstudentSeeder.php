<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DBstudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0;$i<10;$i++){
            DB::table('student')->insert([
                ["IDstudent"=>"518H".Str::random(3),
                "name"=>"Nguyễn Văn ".Str::random(4),
              
                "email"=>"hoangcung".Str::random(4)."@gmail.com",
                "password"=>bcrypt("123456az")]
            ]);
        }
        DB::table('student')->insert([
            ["IDstudent"=>"518H0602",
            "name"=>"Trần Cung",
            "phone"=>"+84396930118",
            "address"=>"Nguyen Huu Tho, Distric 7,Ho Chi Minh city",
            "birthday"=>"2000-05-16",
            "sex"=>"male",
            "avatar"=>"j4Pgo_526884.jpg",
            "email"=>"hoangcung165@gmail.com",
            "password"=>bcrypt("123456az"),
            "created_at"=>"2020-07-10 17:25:58",
            "update_at"=>"2020-07-10 17:27:31"]
        ]);
    }
}
