<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('lesson_id');
            $table->unsignedSmallInteger('grade');
            $table->timestamps();

            $table->index('student_id', 'student_idx');
            $table->index('lesson_id', 'lesson_idx');

            $table->foreign('student_id', 'student_grade_fk')->on('students')->references('id');
            $table->foreign('lesson_id', 'lesson_grade_fk')->on('lessons')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
