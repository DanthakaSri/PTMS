<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLecturersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('lecturer_id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('type');
            $table->integer('faculty_id');
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
        Schema::drop('lecturers');
    }

}
