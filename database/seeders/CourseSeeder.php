<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table("courses")->insert([

    		"name" => Str::random(10),
    		"duration" => rand(10,30)
    	]);
        
    }
}
