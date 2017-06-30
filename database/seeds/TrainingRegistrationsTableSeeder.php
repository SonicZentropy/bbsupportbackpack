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
            'course_type' => 'basic',
            'training_session_id' => '7',
            'registered_user_id' => '4'
        ]);

        DB::table('training_registrations')->insert([
            'courses_taught' => 'other stuff',
            'course_type' => 'online',
            'training_session_id' => '6',
            'registered_user_id' => '4'
        ]);

        DB::table('training_registrations')->insert([
            'courses_taught' => 'more stuff',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'registered_user_id' => '4'
        ]);

        DB::table('training_registrations')->insert([
            'courses_taught' => 'stuff',
            'course_type' => 'hybrid',
            'training_session_id' => '5',
            'registered_user_id' => '4'
        ]);

        DB::table('training_registrations')->insert([
            'courses_taught' => 'maybe stuff',
            'course_type' => 'basic',
            'training_session_id' => '3',
            'registered_user_id' => '4'
        ]);

        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '101005354')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '102006013')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '104007643')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '105000754')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '105003809')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '108001365')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '109004464')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '110004936')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '112009045')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '113007767')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '114001209')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '117002251')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '119003725')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '119007354')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '121006792')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '121007865')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '122008412')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '123001234')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '126004481')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '127004109')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '129007389')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '133007962')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '133007995')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '135002802')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '135008665')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '136000170')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '136004717')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '137006175')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '139007397')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '143005563')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '144006035')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '143008980')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '149003360')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '149003684')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '151003894')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '151006519')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '152004114')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '152008238')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '153000665')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '154000886')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '156008167')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '156008453')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '159006869')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '160007624')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '160005617')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '160009826')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '161005514')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '162002971')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '162003773')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '165001026')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '166001702')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '166002708')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '167005242')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '169004248')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '171006446')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '173002226')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '179000476')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '180006454')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '184001853')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '184007212')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '185004988')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '187005687')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '189008266')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '190003477')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '190008645')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '190008938')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '194003650')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '196004149')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '196008422')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '198009979')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '199001576')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '205004420')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '206006464')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '208006810')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '209002691')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '210003589')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '210006647')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '211002028')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '212009158')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '213009954')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '214008372')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '215003842')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '216007542')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '217001351')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '218004419')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '219004498')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '220004314')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '220007929')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '221003501')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '221007264')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '223004965')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '223005584')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '226005530')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '226005815')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '226009531')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '229007082')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '231006655')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '233005717')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '235000382')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '235000427')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '235003770')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '236001904')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '237000874')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '240006061')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '241001300')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '241002377')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '242007840')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '244008285')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '245006568')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '246005158')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '248004109')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '248008859')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '249003878')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '249003980')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '249008291')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '250008690')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '252008069')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '255001700')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '255002080')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '255009824')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '256006000')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '258008355')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '261009750')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '267003845')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '269008542')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '275004097')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '275005308')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '277006400')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '277007345')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '278008077')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '279004746')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '280007461')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '284009395')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '285000374')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '285009052')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '285009142')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '286003791')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '287006833')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '288001433')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '289006774')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '291002387')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '291006232')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '293005978')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '296009718')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '303004394')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '308007100')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '311000390')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '311004765')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '312007629')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '312007700')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '314005149')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '315004204')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '318003799')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '319003169')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '320009364')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '322007946')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '324007905')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '325002233')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '326003387')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '327001267')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '328001189')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '328004744')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '328008338')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '329002288')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '329005414')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '330006482')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '333001803')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '336001719')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '336005034')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '336008868')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '338008316')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '338009780')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '340009216')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '341009085')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '341009489')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '342009376')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '347007208')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '348002404')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '350009538')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '351005486')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '352002877')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '352009058')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '353001581')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '353003365')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '361000978')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '363006805')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '365009380')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '367009719')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '369004470')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '371006397')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '373005417')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '374004521')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '378003215')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '378008796')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '379003381')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '379006754')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '380003734')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '381001431')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '381002349')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '382002650')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '382009527')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '385006827')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '385007501')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '386009607')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '387002090')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '388001873')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '389002852')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '391009899')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '395001150')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '397003066')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '397004212')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '398001340')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '401004897')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '401007671')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '403001456')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '404006456')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '405000455')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '405003210')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '406003356')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '406003404')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '409003500')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '411007029')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '411007687')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '411009566')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '412002873')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '414004966')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '414008210')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '415001155')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '416007347')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '417002792')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '418007123')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '418008254')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '420007231')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '423005923')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '425003026')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '427001556')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '428002605')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '428003640')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '428006908')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '429007391')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '429009489')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '430006194')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '431004487')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '432007801')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '433000355')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '434004080')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '437004924')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '437007434')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '441008120')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '441008889')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '443005497')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '444004137')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '447003876')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '449008400')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '449009347')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '451006015')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '452003910')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '452007483')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '455001221')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '458002441')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '459003626')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '459003875')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '459008292')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '459008700')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '460002978')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '461003088')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '465003535')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '466006426')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '467003413')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '471004513')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '474003797')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '481009263')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '482000879')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '482003917')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '483007242')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '484008428')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '485004685')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '485007588')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '486004916')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '487001905')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '489001986')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '492004991')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '497007673')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '498006833')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '501009803')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '505008055')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '508005076')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '509003889')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '512007290')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '516002301')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '518006218')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '519009007')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '520003466')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '521007106')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '522001344')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '523000700')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '525000115')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '529006429')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '529008311')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '531002765')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '531007939')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '535009547')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '539006314')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '541002650')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '541003679')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '541006430')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '544000692')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '548006156')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '549006674')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '549006859')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '554000538')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '554007486')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '554008661')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '555009273')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '558003626')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '561007513')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '562001405')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '564006220')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '569003891')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '569008954')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '570007673')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '574008779')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '577005139')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '577006173')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '577007513')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '578006417')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '578008384')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '579000371')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '579008433')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '581005203')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '584002107')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '584007572')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '588009451')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '592006311')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '596000194')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '597007455')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '602000956')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '602001620')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '606001567')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '608004323')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '608008354')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '610001420')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '610001674')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '610009236')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '611001587')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '613004012')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '614007511')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '615001683')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '615002567')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '616009117')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '617009030')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '618002384')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '620003509')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '620006903')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '621009962')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '622000365')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '623002742')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '623008819')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '629005445')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '631002998')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '631006916')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '632000313')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '632004627')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '632004943')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '635001325')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '635002560')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '637006811')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '638002974')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '639006732')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '640004314')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '641001578')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '642001802')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '644008794')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '645001124')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '645002774')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '646001139')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '646003951')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '647009109')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '648005455')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '649003446')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '650006754')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '651008784')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '652008431')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '652008438')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '655004158')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '656009435')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '659005162')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '664001468')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '665007163')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '669000216')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '669002045')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '669005078')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '672008103')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '673001613')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '675005518')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '676004245')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '679007700')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '680001492')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '680007336')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '682002850')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '682007464')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '683009509')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '685004891')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '686005687')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '689001967')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '690006195')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '696003148')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '698003578')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '703006801')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '704006973')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '705001866')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '705003835')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '707001321')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '708004088')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '709008772')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '709009906')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '714004486')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '714006004')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '718005154')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '718009713')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '719002104')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '720004027')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '721006513')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '721006981')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '722004904')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '723000846')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '723006559')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '724002800')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '724005283')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '728002370')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '729001373')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '729002034')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '729007370')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '729007801')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '730002635')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '732006443')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '732009017')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '733001383')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '735007044')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '736003203')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '736006138')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '737000653')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '738004251')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '738005234')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '739000581')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '740001267')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '741004797')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '742000627')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '742008883')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '743000886')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '743002901')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '744007723')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '745008024')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '746006808')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '747009097')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '748004893')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '748005457')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '748000839')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '749002201')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '750003862')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '750004487')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '751002538')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '755008775')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '756004452')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '757008237')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '761003395')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '762005847')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '766002715')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '766004952')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '767003155')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '768007135')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '771006452')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '773000377')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '773007057')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '774002757')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '774004561')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '778000844')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '779002781')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '781002203')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '782003804')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '785005475')->get()->first()->id,
        ]);

        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '788005486')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '791004703')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '791007446')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '794004927')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '794007468')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '795009119')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '796000965')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '796008056')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '799008766')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '801001151')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '801002557')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '801008278')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '803003934')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '803007613')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '805003823')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '808005565')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '814007697')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '816005499')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '823000277')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '824006033')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '825000977')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '825002201')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '826003461')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '827006565')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '828000334')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '828006010')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '830003066')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '831009198')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '833005405')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '836005496')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '837006898')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '838006634')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '841007550')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '842005659')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '843000928')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '845003182')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '847002004')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '847008000')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '847008922')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '848003937')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '848004726')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '851003569')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '853007221')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '855000744')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '855009316')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '856005483')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '857001431')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '857005924')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '858004108')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '859005632')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '859009670')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '860006751')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '865006358')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '865007913')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '866001643')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '866007131')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '866009908')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '868005387')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '870008382')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '872003371')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '874002175')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '878009119')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '882005622')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '883008368')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '884009456')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '889004556')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '892005536')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '893001094')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '893005947')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '893006539')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '894006935')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '896002180')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '899001692')->get()->first()->id,
        ]);
        DB::table('training_registrations')->insert([
            'courses_taught' => 'N/A',
            'course_type' => 'basic',
            'training_session_id' => '1',
            'attended_first' => '1',
            'attended_second' => '1',
            'completed_certification' => '1',
            'registered_user_id' => DB::table('users')->where('personal_id', '=', '899006421')->get()->first()->id,
        ]);


    }
}
