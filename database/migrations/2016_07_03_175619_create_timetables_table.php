<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTimetablesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->String('faculty_name')->nullable();
            $table->string('course_name')->nullable();
            $table->string('hall_name')->nullable();
            $table->datetime('start');
            $table->datetime('end')->nullable();
            $table->boolean('allDay')->nullable();
            $table->string('color')->nullable();
            $table->mediumText('title')->nullable();
            $table->string('type')->nullable();
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
        Schema::drop('timetables');
    }

}
