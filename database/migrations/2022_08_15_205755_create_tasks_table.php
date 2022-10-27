<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * In this function, we define the structure of a table in the database
         * The framework will create the correpondent table in the database based
         * on the definitions below.
         */
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); //id is the primary key - auto inc

            //var_char type will be used in the table for mysql
            $table->string('description'); 
            
            //a unsigned integer will be used to register a foreign key to
            //id of the user associated with a task
            // $table->unsignedInteger('user_id'); // sqlite
            $table->unsignedBigInteger('user_id'); //mysql
            
            //every task has a status and it will defined as false
            $table->boolean('status')->default(false);
            
            //here we specify a relationship between the user and a tasks
            //We are telling the laravel that user_id will be a foreign key
            //to id in the table users
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            
            //this function generated two field in the database
            //created_at and updated_at 
            //
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
        Schema::dropIfExists('tasks');
    }
};
