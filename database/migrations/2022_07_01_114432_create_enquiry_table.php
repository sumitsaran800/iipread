<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquiryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiry', function (Blueprint $table) {
            $table->id();
            $table->id('enquiry_id');
            $table->string('name');
            $table->string('email');
            $table->string('contact', 13)->nullable();
            $table->text('enquiry');
            $table->enum('gender', ['M', 'F'])->nullable();
            $table->text('adress')->nullable();
            $table->bigInteger('country_id')->unsigned();
            $table->foreign('country_id')->on('countries')->references('country_id');
            $table->bigInteger('state_id')->unsigned();
            $table->foreign('state_id')->on('states')->references('state_id');
            $table->bigInteger('course_id')->unsigned();
            $table->foreign('course_id')->on('course')->references('course_id');
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
        Schema::dropIfExists('enquiry');
    }
}