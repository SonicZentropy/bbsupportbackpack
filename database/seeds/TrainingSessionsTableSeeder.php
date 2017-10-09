<?php

use Illuminate\Database\Seeder;

class TrainingSessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('training_sessions')->insert([
            'first_session' => '2000-01-01 08:00:00',
            'second_session' => '2000-01-07 00:00:00',
            'training_type' => 'Workshop',
            'title' => 'Old Training',
            'id' => '1',
        ]);
        DB::table('training_sessions')->insert([
            'first_session' => '2000-01-01 08:00:00',
            'second_session' => '2300-01-01 00:00:00',
            'training_type' => 'Online',
            'title' => 'Online Training',
        ]);
        DB::table('training_sessions')->insert([
            'first_session' => '2017-05-05 08:00:00',
            'second_session' => '2017-05-12 09:00:00',
            'training_type' => 'Workshop',
            'title' => 'Workshop Training 1',
        ]);
        DB::table('training_sessions')->insert([
            'first_session' => '2017-05-15 08:00:00',
            'second_session' => '2017-05-22 09:00:00',
            'training_type' => 'Workshop',
            'title' => 'Workshop Training 2',
        ]);
        DB::table('training_sessions')->insert([
            'first_session' => '2017-06-05 08:00:00',
            'second_session' => '2017-06-12 09:00:00',
            'training_type' => 'Workshop',
            'title' => 'Workshop Training 3',
        ]);
        DB::table('training_sessions')->insert([
            'first_session' => '2017-07-15 08:00:00',
            'second_session' => '2017-07-22 09:00:00',
            'training_type' => 'Workshop',
            'title' => 'Workshop Training 4',
        ]);
        DB::table('training_sessions')->insert([
            'first_session' => '2017-08-05 08:00:00',
            'second_session' => '2017-08-12 09:00:00',
            'training_type' => 'Workshop',
            'title' => 'Workshop Training 5',
        ]);
        DB::table('training_sessions')->insert([
            'first_session' => '2017-09-15 08:00:00',
            'second_session' => '2017-09-22 09:00:00',
            'training_type' => 'Workshop',
            'title' => 'Workshop Training 6',
        ]);

    }
}
