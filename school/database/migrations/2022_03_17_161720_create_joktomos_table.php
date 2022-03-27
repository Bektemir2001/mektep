<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoktomosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joktomos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('lesson_id');
            $table->unsignedSmallInteger('is_student_here')->default(0);
            $table->timestamps();

            $table->index('student_id', 'student_idx');
            $table->index('lesson_id', 'lesson_idx');

            $table->foreign('student_id', 'student_joktomo_fk')->on('students')->references('id');
            $table->foreign('lesson_id', 'lesson_joktomo_fk')->on('lessons')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('joktomos');
    }
}
