<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DBaddCVSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1;$i<6;$i++){ 
            DB::table('addcv')->insert([
                "idJob"=>$i,
                "idStd"=>$i+1,
                "fileCV"=>Str::random(6),
                "name"=>Str::random(6)
            ]);
        }
        DB::table('addcv')->insert([
            "idJob"=>13,
            "idStd"=>11,
            "fileCV"=>'Trần Cung',
            "name"=>'qEhb9_Final-web.docx',
            "created_at"=>"2020-07-10 18:24:36",
            "updated_at"=>"2020-07-10 18:35:29"
        ]);
    }
}
