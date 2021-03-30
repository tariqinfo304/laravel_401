<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {

            $table->id();
            $table->string("name");
            $table->integer("age");
            $table->integer("salary");
            $table->text("address")->nullable();
            $table->string("designation");
            $table->string("email")->unique();
            $table->string("marriage_status")->nullable();
            $table->string("phone")->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher');
    }
}
