<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('first_session');
            $table->dateTime('second_session');
            //$table->integer('training_type')->default('0');
            $table->enum('training_type', array('basic', 'online', 'hybrid'))->default('basic');
            $table->integer('number_enrolled')->default(0);
            $table->string('title');
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
        Schema::dropIfExists('training_sessions');
    }
}
