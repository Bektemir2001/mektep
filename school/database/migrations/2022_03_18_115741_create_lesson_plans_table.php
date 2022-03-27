<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('klass_id');
            $table->unsignedSmallInteger('day');
            $table->timestamps();

            $table->index('klass_id', 'klass_day_idx');
            $table->foreign('klass_id', 'klass_day_fk')->on('klasses')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_plans');
    }
}
