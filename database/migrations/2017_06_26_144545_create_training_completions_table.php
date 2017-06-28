<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingCompletionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_completions', function (Blueprint $table) {
            $empty = "UAPTC";
            $table->increments('id')->unique();
            //$table->string('name');
            //$table->string('institution')->default($empty);
            //$table->integer('personal_id')->default(101010);
            //$table->string('email')->default("test@gmail.com");
            $table->string('courses_taught')->default("None"); // This probably needs to link to a db later
            $table->boolean('laptop')->default(true);
            $table->enum('course_type', array('basic', 'online', 'hybrid', 'unknown'))->default('basic');
            $table->boolean('accommodations')->default(false);
            $table->boolean('has_been_reminded')->default(false);
            $table->boolean('has_been_reminded_second_id')->default(false);
            $table->integer('training_session_id')->unsigned();
            $table->foreign('training_session_id')->references('id')->on('training_sessions');

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
        Schema::dropIfExists('training_completions');
    }
}
