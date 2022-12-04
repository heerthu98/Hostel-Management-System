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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('enroll_no')->unique();
            $table->string('course');
            $table->integer('batch');
            $table->string('gender');
            $table->string('phone');
            $table->string('address');
            $table->string('town');
            $table->bigInteger('town_distance');
            $table->bigInteger('uni_distance');
            $table->string('father_name');
            $table->float('father_income')->nullable()->default(NULL);
            $table->string('mother_name');
            $table->float('mother_income')->nullable()->default(NULL);
            $table->string('email')->unique();
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
