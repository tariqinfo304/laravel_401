<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("teacher",function(Blueprint $table){

            $table->after("name",function($tbl){

                $tbl->unsignedBigInteger("user_id");
            
            });

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("teacher",function(Blueprint $table){

            $table->dropColumn("user_id");
        });
    }
}
