<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHallsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halls', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('hall_id')->unique();
            $table->string('faculty_id');
            $table->string('name');
            $table->integer('capacity');
            $table->integer('type')->default(0);
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
        Schema::drop('halls');
    }

}
