<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAndCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_and_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_name');
            $table->integer('id_course');
            $table->integer('id_user');
            $table->integer('status'); // 1 : active || 0 : inactive
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
        Schema::dropIfExists('user_and_courses');
    }
}
