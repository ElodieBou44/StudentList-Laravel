<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100); 
            $table->string('address', 50); 
            $table->string('phone', 20);
            $table->string('email', 50)->unique();
            $table->string('birthdate', 10);
            $table->integer('city_id');
            
            $table->foreign('city_id')->references('id')->on('cities');
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
        Schema::dropIfExists('students');
    }
}
