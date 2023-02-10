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
        //
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('name');

            $table->bigInteger('grades_id')->unsigned();
            $table->foreign('grades_id')->references('id')->on('grades')->onDelete('cascade')->onUpdate('cascade');
            $table->string('academicYear')->default('2023');
            $table->integer('quarter');
            $table->integer('exam1');
            $table->integer('exam2');
            $table->integer('exam3');
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
        //
    }
};
