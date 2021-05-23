<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('name_kelas');
            $table->foreignId('teacher_id')->constrained('users');
            $table->longText('desc_kelas');
            $table->string('name_topic');
            $table->string('file_topic');
            $table->string('name_video')->nullable();
            $table->string('file_video')->nullable();
            $table->string('name_kuis')->nullable();
            $table->string('file_kuis')->nullable();
            $table->mediumInteger('studentSeen')->nullable();
            $table->mediumInteger('studentFinished')->nullable();
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
        Schema::dropIfExists('kelas');
    }
}
