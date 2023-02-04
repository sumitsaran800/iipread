<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id('course_id');
            $table->text('course_title');
            $table->text('course_description');
            $table->string('course_logo')->nullable();
            $table->string('course_color')->default('#00a8ec');
            $table->boolean('status')->comment("1: Active , 0: Inactive");
            $table->decimal('course_price', 8, 2)->default(0);
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
        Schema::dropIfExists('course');
    }
}