<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas_id')->constrained('kelas');
            $table->foreignId('teacher_id')->constrained('users');
            $table->string('name_kuis');
            $table->string('jenis_kuis');
            $table->string('count_kuis');
            $table->string('file_kuis');
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
        Schema::dropIfExists('jenis_kuis');
    }
}
