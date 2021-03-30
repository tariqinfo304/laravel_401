<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            // PK , Auto Increment and name with id 
            $table->id();
            //end//
            
            //Not NULL
            $table->string('name'); // varchar(255)

            $table->string('email')->unique(); // unique key index on email column

            //set default null value in email_verified_at column
            $table->timestamp('email_verified_at')->nullable();

            $table->string('password');

            //built-in 
            // remmeber_me
            $table->rememberToken();
            
            //created_at and updated_at with datetime data types
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
        Schema::dropIfExists('users');
    }
}
