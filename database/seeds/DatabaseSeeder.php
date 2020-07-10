<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // $this->call(DBskillSeeder::class);
        $this->call(DBplaceSeeder::class);
        $this->call(DBadminSeeder::class);
        $this->call(DBcompanySeeder::class);
        $this->call(DBstudentSeeder::class);
        $this->call(DBjobSeeder::class);
        $this->call(DBaddCVSeeder::class);
        $this->call(DBskillSeeder::class);

    }
}
