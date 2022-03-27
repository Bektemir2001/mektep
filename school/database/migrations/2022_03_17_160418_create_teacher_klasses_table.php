<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherKlassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_klasses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('klass_id');
            $table->timestamps();

            $table->index('teacher_id', 'teacher_idx');
            $table->index('klass_id', 'klass_idx');

            $table->foreign('teacher_id', 'klass_teacher_fk')->on('teachers')->references('id');
            $table->foreign('klass_id', 'teacher_klass_fk')->on('klasses')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_klasses');
    }
}
