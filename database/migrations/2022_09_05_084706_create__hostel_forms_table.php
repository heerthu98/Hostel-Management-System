<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostel_form', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('stu_id');
            $table->integer('year');
            $table->integer('semester');
            $table->string('disease')->nullable()->default(NULL);
            $table->string('reason')->nullable()->default(NULL);
            $table->string('status')->nullable()->default('Pending');
            $table->string('hostelname')->nullable()->default(NULL);
            $table->integer('roomno')->nullable()->default(NULL);
            $table->integer('bedno')->nullable()->default(NULL);
            $table->timestamps();

            $table->foreign('stu_id')
                ->references('id')
                ->on('students')
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
        Schema::dropIfExists('_hostel_forms');
    }
}
