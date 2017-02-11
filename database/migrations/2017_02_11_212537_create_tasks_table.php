<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('body');
            $table->text('description');
            $table->string('priority',1);
            $table->tinyInteger('difficulty');
            $table->dateTimeTz('due');
            $table->dateTimeTz('start_date');
            $table->dateTimeTz('completion_date');
            $table->boolean('completed');
            $table->timestamps();

            $table->integer('board_id')->unsigned();
            $table->foreign('board_id')->references('id')->on('boards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
