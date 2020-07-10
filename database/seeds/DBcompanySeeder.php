<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DBcompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0;$i<10;$i++){
            DB::table('company')->insert([
                ["name"=>"THC".Str::random(3),
                "nationality"=>"Việt Nam",
                "address"=>Str::random(5)." Ho Chi Minh",
                "website"=>"THC".Str::random(5).".com",
                "logo"=>Str::random(10),
                "User_name"=>"TranCung".Str::random(3),
                "email"=>"hoangcung".Str::random(4)."@gmail.com",
                "password"=>bcrypt("123456az")]
            ]);
        }
        DB::table('company')->insert([
            ["name"=>"Trần Hoàng Cung",
            "nationality"=>"Việt Nam",
            "address"=>"Nguyen Huu Tho, Distric 7,Ho Chi Minh city",
            "website"=>"https://www.youtube.com/?gl=VN",
            "logo"=>"peOiw_35beaa3a81b82b821342933ce0945261.jpg",
            "User_name"=>"Tran Cung Anh",
            "email"=>"hhoangcung165@gmail.com",
            "password"=>bcrypt("123456az")]
        ]);
    }
}
