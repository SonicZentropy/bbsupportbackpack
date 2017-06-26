<?php

use Illuminate\Database\Seeder;

class TrainingRegistrationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('training_registrations')->insert([
            'courses_taught' => 'some stuff',
            'course_type' => '1',
            'training_session_id' => '7',
            'registered_user_id' => '4'
        ]);

        DB::table('training_registrations')->insert([
            'courses_taught' => 'other stuff',
            'course_type' => '1',
            'training_session_id' => '6',
            'registered_user_id' => '4'
        ]);

        DB::table('training_registrations')->insert([
            'courses_taught' => 'more stuff',
            'course_type' => '1',
            'training_session_id' => '1',
            'registered_user_id' => '4'
        ]);

        DB::table('training_registrations')->insert([
            'courses_taught' => 'stuff',
            'course_type' => '1',
            'training_session_id' => '5',
            'registered_user_id' => '4'
        ]);

        DB::table('training_registrations')->insert([
            'courses_taught' => 'maybe stuff',
            'course_type' => '1',
            'training_session_id' => '3',
            'registered_user_id' => '4'
        ]);
    }
}
