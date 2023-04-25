<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::dropIfExists('course_student');

    Schema::create('course_student', function (Blueprint $table) {
        $table->unsignedBigInteger('course_id');
        $table->unsignedBigInteger('student_id');
        $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        $table->timestamps();

        $table->primary(['course_id', 'student_id']);
    });
}

public function down()
{
    Schema::dropIfExists('course_student');
}
};
