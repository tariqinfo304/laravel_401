<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();


    	for($i=0;$i<10;$i++)
            $this->call(fill_user_table::class);

        for($i=0;$i<5;$i++)
            $this->call(TeacherSeeder::class);
    }
}
