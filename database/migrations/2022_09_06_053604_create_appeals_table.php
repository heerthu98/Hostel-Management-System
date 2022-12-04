<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appeals', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('student_id');
            //$table->string('fullname');
            $table->string('enroll_no');
            //$table->string('newhostelname')->nullable()->default(NULL);
            //$table->integer('newroomno')->nullable()->default(NULL);
            $table->string('status')->nullable()->default('Pending');
            $table->string('appealreason');
            // $table->integer('bedno')->nullable()->default(NULL);
            $table->timestamps();

            $table->foreign('student_id')
                ->references('stu_id')
                ->on('hostel_form')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appeals');
    }
}
