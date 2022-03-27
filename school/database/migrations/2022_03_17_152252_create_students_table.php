<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('klass_id');
            $table->timestamps();

            $table->index('user_id', 'user_idx');
            $table->index('klass_id', 'klass_idx');


            $table->foreign('user_id', 'user_fk')->on('users')->references('id');
            $table->foreign('klass_id', 'klass_fk')->on('klasses')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
