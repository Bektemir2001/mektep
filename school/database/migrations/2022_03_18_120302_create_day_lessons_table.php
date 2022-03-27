<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lessonPlan_id');
            $table->unsignedBigInteger('lesson_id');
            $table->timestamps();

            $table->index('lessonPlan_id', 'lessonPlan_idx');
            $table->index('lesson_id', 'lesson_idx');

            $table->foreign('lessonPlan_id', 'lessonPlan_fk')->on('lesson_plans')->references('id');
            $table->foreign('lesson_id', 'plan_lesson_fk')->on('lessons')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('day_lessons');
    }
}
