<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users_infomation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('email',255)->unique();
            $table->string('password',255);
            $table->string('birth',255);
            $table->string('address',255);
            $table->boolean('gender',1);
            $table->timestamps();
        });
       Schema::table('users_infomation', function (Blueprint $table){
            
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    

        Schema::dropIfExists('users_information');
        
    }
}
