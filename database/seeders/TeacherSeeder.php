<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teacher')->insert([

            'name' => Str::random(10),
            'user_id' => 1,
            'age' => rand(1,50),
            'email' => Str::random(10).'@gmail.com',
            'designation' => Str::random(10),
            'salary' => rand(100,1000)

        ]);
    }
}
