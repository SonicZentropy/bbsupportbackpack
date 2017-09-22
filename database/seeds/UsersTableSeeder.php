<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    private $ShouldFullSeed = true;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Casey Bailey',
            'email' => 'cbailey@pulaskitech.edu',
            'password' => bcrypt('kckckc'),
            'certified' => 1,
            'isAdmin' => 1,
            'personal_id' => ' 116004734',

        ]);
        DB::table('users')->insert([
            'name' => 'Terry Patterson',
            'email' => 'tpatterson@pulaskitech.edu',
            'password' => bcrypt('password'),
            'certified' => 1,
            'isAdmin' => 1,
            'personal_id' => ' 787005383',
        ]);
        DB::table('users')->insert([
            'name' => 'Jasmine Williams',
            'email' => 'jcwilliams@pulaskitech.edu',
            'password' => bcrypt('password'),
            'certified' => 1,
            'isAdmin' => 1,
            'personal_id' => '485007588',
        ]);

        DB::table('users')->insert([
            'name' => 'Test User',
            'email' => 'ofs@pulaskitech.edu',
            'password' => bcrypt('kc'),
            'certified' => 0,
            'personal_id' => '123456789',
        ]);

        DB::table('users')->insert([
            'name' => 'Robin Macagni',
            'email' => 'rmacagni@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '101005354',
        ]);
        DB::table('users')->insert([
            'name' => 'Martha Carle',
            'email' => 'mcarle@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '102006013',
        ]);
        DB::table('users')->insert([
            'name' => 'Shirley Powell',
            'email' => 'spowell@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '104007643',
        ]);

        if (!$this->ShouldFullSeed)
            return;

        DB::table('users')->insert([
            'name' => 'Lisa Smithee',
            'email' => 'lsmithee@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '105000754',
        ]);
        DB::table('users')->insert([
            'name' => 'Paul Woods',
            'email' => 'pwoods@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '105003809',
        ]);
        DB::table('users')->insert([
            'name' => 'Oscar DeLong',
            'email' => 'odelong@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '108001365',
        ]);
        DB::table('users')->insert([
            'name' => 'Shirley Yaw',
            'email' => 'syaw@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '109004464',
        ]);
        DB::table('users')->insert([
            'name' => 'Shannon Avra',
            'email' => 'savra@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '110004936',
        ]);
        DB::table('users')->insert([
            'name' => 'Cheryl Chapman',
            'email' => 'cchapman@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '112009045',
        ]);
        DB::table('users')->insert([
            'name' => 'Abigail Perrine',
            'email' => 'aperrine@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '113007767',
        ]);
        DB::table('users')->insert([
            'name' => 'Barry McVinney',
            'email' => 'bmcvinney@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '114001209',
        ]);
        DB::table('users')->insert([
            'name' => 'Alex Chalupka',
            'email' => 'achalupka@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '117002251',
        ]);
        DB::table('users')->insert([
            'name' => 'Sharrone Cox',
            'email' => 'scox@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '119003725',
        ]);
        DB::table('users')->insert([
            'name' => 'Julia Ramey',
            'email' => 'jramey@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '119007354',
        ]);
        DB::table('users')->insert([
            'name' => 'Jesse Poff',
            'email' => 'jpoff@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '121006792',
        ]);
        DB::table('users')->insert([
            'name' => 'Ben Rains',
            'email' => 'brains@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '121007865',
        ]);
        DB::table('users')->insert([
            'name' => 'Casson Brock',
            'email' => 'cbrock@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '122008412',
        ]);
        DB::table('users')->insert([
            'name' => 'Jane Doe',
            'email' => 'jdoe@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '123001234',
        ]);
        DB::table('users')->insert([
            'name' => 'Tamisha Doublin',
            'email' => 'tdoublin@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '126004481',
        ]);
        DB::table('users')->insert([
            'name' => 'Chris Paradis',
            'email' => 'cparadis@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '127004109',
        ]);
        DB::table('users')->insert([
            'name' => 'Carla  J. Moody',
            'email' => 'cmoody@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '129007389',
        ]);
        DB::table('users')->insert([
            'name' => 'Nicolette Smith',
            'email' => 'nsmith@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '133007962',
        ]);
        DB::table('users')->insert([
            'name' => 'David Durr',
            'email' => 'ddurr@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '133007995',
        ]);
        DB::table('users')->insert([
            'name' => 'Neil Mitchell',
            'email' => 'nmitchell@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '135002802',
        ]);
        DB::table('users')->insert([
            'name' => 'Leslie Lovenstein',
            'email' => 'llovenstein@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '135008665',
        ]);
        DB::table('users')->insert([
            'name' => 'Sherry Bowman',
            'email' => 'sbowman@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '136000170',
        ]);
        DB::table('users')->insert([
            'name' => 'Caroline Elmore',
            'email' => 'celmore@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '136004717',
        ]);
        DB::table('users')->insert([
            'name' => 'Natalie Rollins',
            'email' => 'nrollins@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '137006175',
        ]);
        DB::table('users')->insert([
            'name' => 'Paul Bennett',
            'email' => 'pbennett@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '139007397',
        ]);
        DB::table('users')->insert([
            'name' => 'Larhonda Jackson',
            'email' => 'ljackson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '143005563',
        ]);
        DB::table('users')->insert([
            'name' => 'Patricia Martinez',
            'email' => 'pmartinez@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '144006035',
        ]);
        DB::table('users')->insert([
            'name' => 'Clayton Ruff',
            'email' => 'cruff@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '143008980',
        ]);
        DB::table('users')->insert([
            'name' => 'Lynn Strong',
            'email' => 'lstrong@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '149003360',
        ]);
        DB::table('users')->insert([
            'name' => 'Larry Taylor',
            'email' => 'ltaylor@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '149003684',
        ]);
        DB::table('users')->insert([
            'name' => 'Martha Kubin',
            'email' => 'mkubin@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '151003894',
        ]);
        DB::table('users')->insert([
            'name' => 'Dennis Welch',
            'email' => 'dwelch@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '151006519',
        ]);
        DB::table('users')->insert([
            'name' => 'Rebecca Nelson',
            'email' => 'rnelson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '152004114',
        ]);
        DB::table('users')->insert([
            'name' => 'Cheryl Reinhart',
            'email' => 'creinhart@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '152008238',
        ]);
        DB::table('users')->insert([
            'name' => 'Dioneedra Irvin',
            'email' => 'dirvin@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '153000665',
        ]);
        DB::table('users')->insert([
            'name' => 'Jeffrey Walker',
            'email' => 'jwalker@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '154000886',
        ]);
        DB::table('users')->insert([
            'name' => 'Cynthia Randolph',
            'email' => 'crandolph@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '156008167',
        ]);
        DB::table('users')->insert([
            'name' => 'Elizabeth Clyburn',
            'email' => 'eclyburn@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '156008453',
        ]);
        DB::table('users')->insert([
            'name' => 'Leslie Cloer',
            'email' => 'lcloer@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '159006869',
        ]);
        DB::table('users')->insert([
            'name' => 'Osmonetta McRae',
            'email' => 'omcrae@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '160007624',
        ]);
        DB::table('users')->insert([
            'name' => 'George T. Davis ',
            'email' => 'gdavis @pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '160005617',
        ]);
        DB::table('users')->insert([
            'name' => 'Joanna Ewing',
            'email' => 'jewing@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '160009826',
        ]);
        DB::table('users')->insert([
            'name' => 'Cheri Courtright',
            'email' => 'ccourtright@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '161005514',
        ]);
        DB::table('users')->insert([
            'name' => 'Jayson Malik',
            'email' => 'jmalik@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '162002971',
        ]);
        DB::table('users')->insert([
            'name' => 'Roy Minton',
            'email' => 'rminton@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '162003773',
        ]);
        DB::table('users')->insert([
            'name' => 'Mischel Elliott',
            'email' => 'melliott@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '165001026',
        ]);
        DB::table('users')->insert([
            'name' => 'Randall Robertson',
            'email' => 'rrobertson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '166001702',
        ]);
        DB::table('users')->insert([
            'name' => 'Alan Pogue',
            'email' => 'apogue@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '166002708',
        ]);
        DB::table('users')->insert([
            'name' => 'Terence Cox',
            'email' => 'tcox@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '167005242',
        ]);
        DB::table('users')->insert([
            'name' => 'Starlett Mack',
            'email' => 'smack@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '169004248',
        ]);
        DB::table('users')->insert([
            'name' => 'Nykela Jackson',
            'email' => 'njackson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '171006446',
        ]);
        DB::table('users')->insert([
            'name' => 'Tiffany Smith',
            'email' => 'tsmith@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '173002226',
        ]);
        DB::table('users')->insert([
            'name' => 'Ernesto Velazquez',
            'email' => 'evelazquez@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '179000476',
        ]);
        DB::table('users')->insert([
            'name' => 'Kenneth Lipsmeyer',
            'email' => 'klipsmeyer@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '180006454',
        ]);
        DB::table('users')->insert([
            'name' => 'Kelley Cowley',
            'email' => 'kcowley@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '184001853',
        ]);
        DB::table('users')->insert([
            'name' => 'William Wyngaard',
            'email' => 'wwyngaard@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '184007212',
        ]);
        DB::table('users')->insert([
            'name' => 'Shelley Oberste-Hanson',
            'email' => 'soberste-hanson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '185004988',
        ]);
        DB::table('users')->insert([
            'name' => 'Logan Oliver',
            'email' => 'loliver@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '187005687',
        ]);
        DB::table('users')->insert([
            'name' => 'Don Kuonen',
            'email' => 'dkuonen@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '189008266',
        ]);
        DB::table('users')->insert([
            'name' => 'Lindsay Ratliff-Kullenberg',
            'email' => 'lratliff-kullenberg@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '190003477',
        ]);
        DB::table('users')->insert([
            'name' => 'Michael Milligan',
            'email' => 'mmilligan@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '190008645',
        ]);
        DB::table('users')->insert([
            'name' => 'Jimmy Brooks',
            'email' => 'jbrooks@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '190008938',
        ]);
        DB::table('users')->insert([
            'name' => 'Emily Norman',
            'email' => 'enorman@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '194003650',
        ]);
        DB::table('users')->insert([
            'name' => 'Mary Olm',
            'email' => 'molm@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '196004149',
        ]);
        DB::table('users')->insert([
            'name' => 'Laura Govia',
            'email' => 'lgovia@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '196008422',
        ]);
        DB::table('users')->insert([
            'name' => 'Amy Baldwin',
            'email' => 'abaldwin@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '198009979',
        ]);
        DB::table('users')->insert([
            'name' => 'Jonathan Purkiss',
            'email' => 'jpurkiss@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '199001576',
        ]);
        DB::table('users')->insert([
            'name' => 'Francine Leon',
            'email' => 'fleon@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '205004420',
        ]);
        DB::table('users')->insert([
            'name' => 'Karin HodginJones',
            'email' => 'khodginjones@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '206006464',
        ]);
        DB::table('users')->insert([
            'name' => 'Nancy Reedy',
            'email' => 'nreedy@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '208006810',
        ]);
        DB::table('users')->insert([
            'name' => 'Deana Nall',
            'email' => 'dnall@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '209002691',
        ]);
        DB::table('users')->insert([
            'name' => 'Elivia Wafford',
            'email' => 'ewafford@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '210003589',
        ]);
        DB::table('users')->insert([
            'name' => 'Constance Meadors',
            'email' => 'cmeadors@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '210006647',
        ]);
        DB::table('users')->insert([
            'name' => 'Karren Lee',
            'email' => 'klee@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '211002028',
        ]);
        DB::table('users')->insert([
            'name' => 'Shirley Kelley',
            'email' => 'skelley@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '212009158',
        ]);
        DB::table('users')->insert([
            'name' => 'James Becker',
            'email' => 'jbecker@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '213009954',
        ]);
        DB::table('users')->insert([
            'name' => 'Ruth Reavis',
            'email' => 'rreavis@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '214008372',
        ]);
        DB::table('users')->insert([
            'name' => 'Shannon Vaughn',
            'email' => 'svaughn@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '215003842',
        ]);
        DB::table('users')->insert([
            'name' => 'Christopher Phillips',
            'email' => 'cphillips@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '216007542',
        ]);
        DB::table('users')->insert([
            'name' => 'Julianne Nelson',
            'email' => 'jnelson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '217001351',
        ]);
        DB::table('users')->insert([
            'name' => 'George Lauster',
            'email' => 'glauster@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '218004419',
        ]);
        DB::table('users')->insert([
            'name' => 'Jeanne E. Williams',
            'email' => 'jwilliams@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '219004498',
        ]);
        DB::table('users')->insert([
            'name' => 'Dale Harris',
            'email' => 'dharris@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '220004314',
        ]);
        DB::table('users')->insert([
            'name' => 'Marcus Montgomery',
            'email' => 'mmontgomery@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '220007929',
        ]);
        DB::table('users')->insert([
            'name' => 'Bill Peery',
            'email' => 'bpeery@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '221003501',
        ]);
        DB::table('users')->insert([
            'name' => 'Carlton Coleman',
            'email' => 'ccoleman@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '221007264',
        ]);
        DB::table('users')->insert([
            'name' => 'Lydia Hart',
            'email' => 'lhart@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '223004965',
        ]);
        DB::table('users')->insert([
            'name' => 'Heather Solano',
            'email' => 'hsolano@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '223005584',
        ]);
        DB::table('users')->insert([
            'name' => 'Sabrina Waters',
            'email' => 'swaters@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '226005530',
        ]);
        DB::table('users')->insert([
            'name' => 'Paula Long',
            'email' => 'plong@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '226005815',
        ]);
        DB::table('users')->insert([
            'name' => 'Laura Iverson',
            'email' => 'liverson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '226009531',
        ]);
        DB::table('users')->insert([
            'name' => 'Joan Dudley',
            'email' => 'jdudley@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '229007082',
        ]);
        DB::table('users')->insert([
            'name' => 'Brenda Bradley',
            'email' => 'bbradley@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '231006655',
        ]);
        DB::table('users')->insert([
            'name' => 'Mary Bishop',
            'email' => 'mbishop@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '233005717',
        ]);
        DB::table('users')->insert([
            'name' => 'Dianne McKinney',
            'email' => 'dmckinney@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '235000382',
        ]);
        DB::table('users')->insert([
            'name' => 'Maribeth Anders',
            'email' => 'manders@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '235000427',
        ]);
        DB::table('users')->insert([
            'name' => 'K. Aurora Adney',
            'email' => 'kadney@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '235003770',
        ]);
        DB::table('users')->insert([
            'name' => 'Scott Warrior',
            'email' => 'swarrior@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '236001904',
        ]);
        DB::table('users')->insert([
            'name' => 'Sarah Clements',
            'email' => 'sclements@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '237000874',
        ]);
        DB::table('users')->insert([
            'name' => 'Michelle Harris',
            'email' => 'mharris@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '240006061',
        ]);
        DB::table('users')->insert([
            'name' => 'Chad Smith',
            'email' => 'csmith@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '241001300',
        ]);
        DB::table('users')->insert([
            'name' => 'Mike Dahly',
            'email' => 'mdahly@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '241002377',
        ]);
        DB::table('users')->insert([
            'name' => 'Christal GravettCarrington',
            'email' => 'cgravettcarrington@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '242007840',
        ]);
        DB::table('users')->insert([
            'name' => 'Dorothy Martin',
            'email' => 'dmartin@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '244008285',
        ]);
        DB::table('users')->insert([
            'name' => 'Ruth Goff',
            'email' => 'rgoff@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '245006568',
        ]);
        DB::table('users')->insert([
            'name' => 'Howard Nesmith',
            'email' => 'hnesmith@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '246005158',
        ]);
        DB::table('users')->insert([
            'name' => 'Yolanda Mitchell',
            'email' => 'ymitchell@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '248004109',
        ]);
        DB::table('users')->insert([
            'name' => 'Tarlease Jones',
            'email' => 'tjones@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '248008859',
        ]);
        DB::table('users')->insert([
            'name' => 'William (Jay) Adkins',
            'email' => 'wadkins@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '249003878',
        ]);
        DB::table('users')->insert([
            'name' => 'Cynthia Fehrenbach',
            'email' => 'cfehrenbach@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '249003980',
        ]);
        DB::table('users')->insert([
            'name' => 'Mary Kate  Terrell',
            'email' => 'm terrell@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '249008291',
        ]);
        DB::table('users')->insert([
            'name' => 'Laura Goadrich',
            'email' => 'lgoadrich@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '250008690',
        ]);
        DB::table('users')->insert([
            'name' => 'Terry Brown',
            'email' => 'tbrown@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '252008069',
        ]);
        DB::table('users')->insert([
            'name' => 'Meenakshi Budhraja',
            'email' => 'mbudhraja@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '255001700',
        ]);
        DB::table('users')->insert([
            'name' => 'Mike McMillan',
            'email' => 'mmcmillan@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '255002080',
        ]);
        DB::table('users')->insert([
            'name' => 'Paula Morell',
            'email' => 'pmorell@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '255009824',
        ]);
        DB::table('users')->insert([
            'name' => 'Shannon Wilcox',
            'email' => 'swilcox@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '256006000',
        ]);
        DB::table('users')->insert([
            'name' => 'Jason Bass',
            'email' => 'jbass@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '258008355',
        ]);
        DB::table('users')->insert([
            'name' => 'Michael Loya',
            'email' => 'mloya@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '261009750',
        ]);
        DB::table('users')->insert([
            'name' => 'Pat Pierce',
            'email' => 'ppierce@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '267003845',
        ]);
        DB::table('users')->insert([
            'name' => 'Don Gundolf',
            'email' => 'dgundolf@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '269008542',
        ]);
        DB::table('users')->insert([
            'name' => 'Robert Moritz',
            'email' => 'rmoritz@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '275004097',
        ]);
        DB::table('users')->insert([
            'name' => 'Robert Habimana',
            'email' => 'rhabimana@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '275005308',
        ]);
        DB::table('users')->insert([
            'name' => 'Deborah Desjardin',
            'email' => 'ddesjardin@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '277006400',
        ]);
        DB::table('users')->insert([
            'name' => 'Vondra Armstrong',
            'email' => 'varmstrong@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '277007345',
        ]);
        DB::table('users')->insert([
            'name' => 'Renee Bennett',
            'email' => 'rbennett@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '278008077',
        ]);
        DB::table('users')->insert([
            'name' => 'Amanda Bishop',
            'email' => 'abishop@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '279004746',
        ]);
        DB::table('users')->insert([
            'name' => 'Matthew Chase',
            'email' => 'mchase@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '280007461',
        ]);
        DB::table('users')->insert([
            'name' => 'Gary Winkler',
            'email' => 'gwinkler@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '284009395',
        ]);
        DB::table('users')->insert([
            'name' => 'Ginny Wood',
            'email' => 'gwood@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '285000374',
        ]);
        DB::table('users')->insert([
            'name' => 'Jesse Gatewood',
            'email' => 'jgatewood@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '285009052',
        ]);
        DB::table('users')->insert([
            'name' => 'Staci Hufhines-McHenry',
            'email' => 'shufhines-mchenry@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '285009142',
        ]);
        DB::table('users')->insert([
            'name' => 'John Morgan',
            'email' => 'jmorgan@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '286003791',
        ]);
        DB::table('users')->insert([
            'name' => 'David Carpenter',
            'email' => 'dcarpenter@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '287006833',
        ]);
        DB::table('users')->insert([
            'name' => 'Rebecca Hobby',
            'email' => 'rhobby@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '288001433',
        ]);
        DB::table('users')->insert([
            'name' => 'Jason  Choate',
            'email' => 'j choate@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '289006774',
        ]);
        DB::table('users')->insert([
            'name' => 'Tammy Richardson',
            'email' => 'trichardson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '291002387',
        ]);
        DB::table('users')->insert([
            'name' => 'Beata Lovelace',
            'email' => 'blovelace@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '291006232',
        ]);
        DB::table('users')->insert([
            'name' => 'Susan Dollar',
            'email' => 'sdollar@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '293005978',
        ]);
        DB::table('users')->insert([
            'name' => 'Angela Langston',
            'email' => 'alangston@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '296009718',
        ]);
        DB::table('users')->insert([
            'name' => 'Kathryn Young',
            'email' => 'kyoung@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '303004394',
        ]);
        DB::table('users')->insert([
            'name' => 'Joe Jansen',
            'email' => 'jjansen@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '308007100',
        ]);
        DB::table('users')->insert([
            'name' => 'Debra Mcindoe',
            'email' => 'dmcindoe@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '311000390',
        ]);
        DB::table('users')->insert([
            'name' => 'Doris Pierce',
            'email' => 'dpierce@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '311004765',
        ]);
        DB::table('users')->insert([
            'name' => 'H. Oscar Hirby',
            'email' => 'hhirby@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '312007629',
        ]);
        DB::table('users')->insert([
            'name' => 'Sofia Gonzalez',
            'email' => 'sgonzalez@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '312007700',
        ]);
        DB::table('users')->insert([
            'name' => 'Valerie Duckery',
            'email' => 'vduckery@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '314005149',
        ]);
        DB::table('users')->insert([
            'name' => 'Derek Moore',
            'email' => 'dmoore@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '315004204',
        ]);
        DB::table('users')->insert([
            'name' => 'Richard Moss',
            'email' => 'rmoss@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '318003799',
        ]);
        DB::table('users')->insert([
            'name' => 'Robert Clark',
            'email' => 'rclark@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '319003169',
        ]);
        DB::table('users')->insert([
            'name' => 'Valerie JohnsonFranks',
            'email' => 'vjohnsonfranks@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '320009364',
        ]);
        DB::table('users')->insert([
            'name' => 'James Johnson',
            'email' => 'jjohnson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '322007946',
        ]);
        DB::table('users')->insert([
            'name' => 'Tammy Whitfield',
            'email' => 'twhitfield@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '324007905',
        ]);
        DB::table('users')->insert([
            'name' => 'Jolie Mosley',
            'email' => 'jmosley@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '325002233',
        ]);
        DB::table('users')->insert([
            'name' => 'Billy Parchman',
            'email' => 'bparchman@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '326003387',
        ]);
        DB::table('users')->insert([
            'name' => 'Charles Cole',
            'email' => 'ccole@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '327001267',
        ]);
        DB::table('users')->insert([
            'name' => 'Brad Pierce',
            'email' => 'bpierce@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '328001189',
        ]);
        DB::table('users')->insert([
            'name' => 'Meredith Lemons',
            'email' => 'mlemons@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '328004744',
        ]);
        DB::table('users')->insert([
            'name' => 'Robert  D. Coates',
            'email' => 'rcoates@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '328008338',
        ]);
        DB::table('users')->insert([
            'name' => 'Susan Gernenz-Taylor',
            'email' => 'sgernenz-taylor@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '329002288',
        ]);
        DB::table('users')->insert([
            'name' => 'Roni Bowman',
            'email' => 'rbowman@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '329005414',
        ]);
        DB::table('users')->insert([
            'name' => 'Michael Slater',
            'email' => 'mslater@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '330006482',
        ]);
        DB::table('users')->insert([
            'name' => 'Wendy Davis',
            'email' => 'wdavis@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '333001803',
        ]);
        DB::table('users')->insert([
            'name' => 'Bob Glidewell',
            'email' => 'bglidewell@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '336001719',
        ]);
        DB::table('users')->insert([
            'name' => 'Daniel Egbe',
            'email' => 'degbe@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '336005034',
        ]);
        DB::table('users')->insert([
            'name' => 'Carl Mike Daily',
            'email' => 'cdaily@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '336008868',
        ]);
        DB::table('users')->insert([
            'name' => 'Timothy Bennett',
            'email' => 'tbennett@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '338008316',
        ]);
        DB::table('users')->insert([
            'name' => 'Pam Cicirello',
            'email' => 'pcicirello@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '338009780',
        ]);
        DB::table('users')->insert([
            'name' => 'Nicole Holcomb',
            'email' => 'nholcomb@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '340009216',
        ]);
        DB::table('users')->insert([
            'name' => 'Christin Hankins',
            'email' => 'chankins@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '341009085',
        ]);
        DB::table('users')->insert([
            'name' => 'John Farrell',
            'email' => 'jfarrell@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '341009489',
        ]);
        DB::table('users')->insert([
            'name' => 'Lindsey Maestri',
            'email' => 'lmaestri@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '342009376',
        ]);
        DB::table('users')->insert([
            'name' => 'William Strigel',
            'email' => 'wstrigel@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '347007208',
        ]);
        DB::table('users')->insert([
            'name' => 'Jennifer Boccarossa',
            'email' => 'jboccarossa@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '348002404',
        ]);
        DB::table('users')->insert([
            'name' => 'Cynthia  East-Malik',
            'email' => 'ceast-malik@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '350009538',
        ]);
        DB::table('users')->insert([
            'name' => 'Jacqueline Griffin',
            'email' => 'jgriffin@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '351005486',
        ]);
        DB::table('users')->insert([
            'name' => 'Casey Griffith',
            'email' => 'cgriffith@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '352002877',
        ]);
        DB::table('users')->insert([
            'name' => 'Macaiah Tillman',
            'email' => 'mtillman@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '352009058',
        ]);
        DB::table('users')->insert([
            'name' => 'Olivia Powers',
            'email' => 'opowers@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '353001581',
        ]);
        DB::table('users')->insert([
            'name' => 'Julia Crow',
            'email' => 'jcrow@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '353003365',
        ]);
        DB::table('users')->insert([
            'name' => 'Neil Furqueron',
            'email' => 'nfurqueron@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '361000978',
        ]);
        DB::table('users')->insert([
            'name' => 'Ron Skidgel',
            'email' => 'rskidgel@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '363006805',
        ]);
        DB::table('users')->insert([
            'name' => 'Benjamin Pecock',
            'email' => 'bpecock@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '365009380',
        ]);
        DB::table('users')->insert([
            'name' => 'Lori Jones',
            'email' => 'ljones@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '367009719',
        ]);
        DB::table('users')->insert([
            'name' => 'Darrellyn Williams',
            'email' => 'dwilliams@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '369004470',
        ]);
        DB::table('users')->insert([
            'name' => 'Benjamin AndersonBauer',
            'email' => 'bandersonbauer@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '371006397',
        ]);
        DB::table('users')->insert([
            'name' => 'Andre Robinson',
            'email' => 'arobinson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '373005417',
        ]);
        DB::table('users')->insert([
            'name' => 'Wayne Floyd',
            'email' => 'wfloyd@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '374004521',
        ]);
        DB::table('users')->insert([
            'name' => 'James Layton',
            'email' => 'jlayton@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '378003215',
        ]);
        DB::table('users')->insert([
            'name' => 'Sandra Harrington',
            'email' => 'sharrington@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '378008796',
        ]);
        DB::table('users')->insert([
            'name' => 'Cynthia Beck',
            'email' => 'cbeck@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '379003381',
        ]);
        DB::table('users')->insert([
            'name' => 'Moluwa Matute',
            'email' => 'mmatute@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '379006754',
        ]);
        DB::table('users')->insert([
            'name' => 'Jeffrey Skrdlant',
            'email' => 'jskrdlant@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '380003734',
        ]);
        DB::table('users')->insert([
            'name' => 'Deborah Germany',
            'email' => 'dgermany@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '381001431',
        ]);
        DB::table('users')->insert([
            'name' => 'Alex Carraway',
            'email' => 'acarraway@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '381002349',
        ]);
        DB::table('users')->insert([
            'name' => 'Barbara Williams',
            'email' => 'bwilliams@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '382002650',
        ]);
        DB::table('users')->insert([
            'name' => 'Jennifer Ingram',
            'email' => 'jingram@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '382009527',
        ]);
        DB::table('users')->insert([
            'name' => 'Jordan Oroark',
            'email' => 'joroark@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '385006827',
        ]);
        DB::table('users')->insert([
            'name' => 'Veronica Stewart',
            'email' => 'vstewart@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '385007501',
        ]);
        DB::table('users')->insert([
            'name' => 'Matthew McKay',
            'email' => 'mmckay@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '386009607',
        ]);
        DB::table('users')->insert([
            'name' => 'Ebony Conley',
            'email' => 'econley@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '387002090',
        ]);
        DB::table('users')->insert([
            'name' => 'Deena Martin',
            'email' => 'dmartin@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '388001873',
        ]);
        DB::table('users')->insert([
            'name' => 'Karen Tate',
            'email' => 'ktate@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '389002852',
        ]);
        DB::table('users')->insert([
            'name' => 'Gloria Maddox-Powell',
            'email' => 'gmaddox-powell@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '391009899',
        ]);
        DB::table('users')->insert([
            'name' => 'Norma (Jean) Vowell',
            'email' => 'nvowell@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '395001150',
        ]);
        DB::table('users')->insert([
            'name' => 'Jessica Walker',
            'email' => 'jwalker@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '397003066',
        ]);
        DB::table('users')->insert([
            'name' => 'Erika Martin',
            'email' => 'emartin@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '397004212',
        ]);
        DB::table('users')->insert([
            'name' => 'Sherry Clay',
            'email' => 'sclay@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '398001340',
        ]);
        DB::table('users')->insert([
            'name' => 'Christina Oberste',
            'email' => 'coberste@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '401004897',
        ]);
        DB::table('users')->insert([
            'name' => 'Meredith McMillan',
            'email' => 'mmcmillan@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '401007671',
        ]);
        DB::table('users')->insert([
            'name' => 'Meghan MacKrell',
            'email' => 'mmackrell@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '403001456',
        ]);
        DB::table('users')->insert([
            'name' => 'Sherlyn Harris',
            'email' => 'sharris@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '404006456',
        ]);
        DB::table('users')->insert([
            'name' => 'Danny Martin',
            'email' => 'dmartin@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '405000455',
        ]);
        DB::table('users')->insert([
            'name' => 'Phyllis Felton',
            'email' => 'pfelton@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '405003210',
        ]);
        DB::table('users')->insert([
            'name' => 'Stephen Mackey',
            'email' => 'smackey@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '406003356',
        ]);
        DB::table('users')->insert([
            'name' => 'Colby Gunter',
            'email' => 'cgunter@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '406003404',
        ]);
        DB::table('users')->insert([
            'name' => 'Mohamad Nawaz',
            'email' => 'mnawaz@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '409003500',
        ]);
        DB::table('users')->insert([
            'name' => 'Kimberly Gilbert',
            'email' => 'kgilbert@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '411007029',
        ]);
        DB::table('users')->insert([
            'name' => 'Elizabeth Sims',
            'email' => 'esims@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '411007687',
        ]);
        DB::table('users')->insert([
            'name' => 'Jennifer Aunspaugh',
            'email' => 'jaunspaugh@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '411009566',
        ]);
        DB::table('users')->insert([
            'name' => 'Jason Walker',
            'email' => 'jwalker@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '412002873',
        ]);
        DB::table('users')->insert([
            'name' => 'Anne Virden',
            'email' => 'avirden@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '414004966',
        ]);
        DB::table('users')->insert([
            'name' => 'Candace Pierce',
            'email' => 'cpierce@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '414008210',
        ]);
        DB::table('users')->insert([
            'name' => 'Alisa Williams',
            'email' => 'awilliams@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '415001155',
        ]);
        DB::table('users')->insert([
            'name' => 'M. Paige Redd',
            'email' => 'mredd@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '416007347',
        ]);
        DB::table('users')->insert([
            'name' => 'Kellye Mashburn',
            'email' => 'kmashburn@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '417002792',
        ]);
        DB::table('users')->insert([
            'name' => 'Sheila Glasscock',
            'email' => 'sglasscock@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '418007123',
        ]);
        DB::table('users')->insert([
            'name' => 'Stephen Paul',
            'email' => 'spaul@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '418008254',
        ]);
        DB::table('users')->insert([
            'name' => 'Stacy Fortney',
            'email' => 'sfortney@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '420007231',
        ]);
        DB::table('users')->insert([
            'name' => 'Jacqueline Wright',
            'email' => 'jwright@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '423005923',
        ]);
        DB::table('users')->insert([
            'name' => 'Casey Rockwell',
            'email' => 'crockwell@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '425003026',
        ]);
        DB::table('users')->insert([
            'name' => 'Sandy Longhorn',
            'email' => 'slonghorn@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '427001556',
        ]);
        DB::table('users')->insert([
            'name' => 'James Pasley',
            'email' => 'jpasley@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '428002605',
        ]);
        DB::table('users')->insert([
            'name' => 'A. Elizabeth Reves',
            'email' => 'areves@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '428003640',
        ]);
        DB::table('users')->insert([
            'name' => 'Jana Porter',
            'email' => 'jporter@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '428006908',
        ]);
        DB::table('users')->insert([
            'name' => 'Aaron Baldwin',
            'email' => 'abaldwin@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '429007391',
        ]);
        DB::table('users')->insert([
            'name' => 'Janine Tiner',
            'email' => 'jtiner@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '429009489',
        ]);
        DB::table('users')->insert([
            'name' => 'Austin Lovenstein',
            'email' => 'alovenstein@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '430006194',
        ]);
        DB::table('users')->insert([
            'name' => 'J. Michelle Palmer',
            'email' => 'jpalmer@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '431004487',
        ]);
        DB::table('users')->insert([
            'name' => 'Geoff Thiers',
            'email' => 'gthiers@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '432007801',
        ]);
        DB::table('users')->insert([
            'name' => 'Mandie Smith',
            'email' => 'msmith@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '433000355',
        ]);
        DB::table('users')->insert([
            'name' => 'Letrishe Hence',
            'email' => 'lhence@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '434004080',
        ]);
        DB::table('users')->insert([
            'name' => 'Werner Trieschmann',
            'email' => 'wtrieschmann@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '437004924',
        ]);
        DB::table('users')->insert([
            'name' => 'Jason Jewell',
            'email' => 'jjewell@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '437007434',
        ]);
        DB::table('users')->insert([
            'name' => 'Gloria Reyes',
            'email' => 'greyes@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '441008120',
        ]);
        DB::table('users')->insert([
            'name' => 'Robert Best',
            'email' => 'rbest@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '441008889',
        ]);
        DB::table('users')->insert([
            'name' => 'Harold Daigle',
            'email' => 'hdaigle@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '443005497',
        ]);
        DB::table('users')->insert([
            'name' => 'Tracie Rushing',
            'email' => 'trushing@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '444004137',
        ]);
        DB::table('users')->insert([
            'name' => 'Aubrey Pangle',
            'email' => 'apangle@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '447003876',
        ]);
        DB::table('users')->insert([
            'name' => 'David Warren',
            'email' => 'dwarren@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '449008400',
        ]);
        DB::table('users')->insert([
            'name' => 'Paula Watson',
            'email' => 'pwatson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '449009347',
        ]);
        DB::table('users')->insert([
            'name' => 'Terry Allmon',
            'email' => 'tallmon@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '451006015',
        ]);
        DB::table('users')->insert([
            'name' => 'Jennifer Martslolf',
            'email' => 'jmartslolf@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '452003910',
        ]);
        DB::table('users')->insert([
            'name' => 'Susanne Ashby',
            'email' => 'sashby@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '452007483',
        ]);
        DB::table('users')->insert([
            'name' => 'Natalie Molineaux',
            'email' => 'nmolineaux@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '455001221',
        ]);
        DB::table('users')->insert([
            'name' => 'Dana Curry',
            'email' => 'dcurry@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '458002441',
        ]);
        DB::table('users')->insert([
            'name' => 'Ashley Embry',
            'email' => 'aembry@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '459003626',
        ]);
        DB::table('users')->insert([
            'name' => 'Devin McKnight',
            'email' => 'dmcknight@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '459003875',
        ]);
        DB::table('users')->insert([
            'name' => 'Amanda Armstrong',
            'email' => 'aarmstrong@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '459008292',
        ]);
        DB::table('users')->insert([
            'name' => 'Dalana Nugent',
            'email' => 'dnugent@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '459008700',
        ]);
        DB::table('users')->insert([
            'name' => 'Allen Loibner',
            'email' => 'aloibner@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '460002978',
        ]);
        DB::table('users')->insert([
            'name' => 'Michael Hostetler',
            'email' => 'mhostetler@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '461003088',
        ]);
        DB::table('users')->insert([
            'name' => 'Donna Jean Rausch',
            'email' => 'drausch@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '465003535',
        ]);
        DB::table('users')->insert([
            'name' => 'Michele Alice French',
            'email' => 'mfrench@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '466006426',
        ]);
        DB::table('users')->insert([
            'name' => 'Sonya Russ',
            'email' => 'sruss@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '467003413',
        ]);
        DB::table('users')->insert([
            'name' => 'Gary Gaines',
            'email' => 'ggaines@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '471004513',
        ]);
        DB::table('users')->insert([
            'name' => 'Rick Babic',
            'email' => 'rbabic@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '474003797',
        ]);
        DB::table('users')->insert([
            'name' => 'Sarah Nixon',
            'email' => 'snixon@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '481009263',
        ]);
        DB::table('users')->insert([
            'name' => 'John Galbraith',
            'email' => 'jgalbraith@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '482000879',
        ]);
        DB::table('users')->insert([
            'name' => 'Jessica Scharbor',
            'email' => 'jscharbor@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '482003917',
        ]);
        DB::table('users')->insert([
            'name' => 'Jason Hancock',
            'email' => 'jhancock@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '483007242',
        ]);
        DB::table('users')->insert([
            'name' => 'Kristen Holloway',
            'email' => 'kholloway@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '484008428',
        ]);
        DB::table('users')->insert([
            'name' => 'Jason K. Green',
            'email' => 'jgreen@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '485004685',
        ]);

        DB::table('users')->insert([
            'name' => 'Laura Campbell',
            'email' => 'lcampbell@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '486004916',
        ]);
        DB::table('users')->insert([
            'name' => 'Ashia Muhammad',
            'email' => 'amuhammad@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '487001905',
        ]);
        DB::table('users')->insert([
            'name' => 'Amie Csege',
            'email' => 'acsege@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '489001986',
        ]);
        DB::table('users')->insert([
            'name' => 'William Stoval',
            'email' => 'wstoval@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '492004991',
        ]);
        DB::table('users')->insert([
            'name' => 'Susan Williamson',
            'email' => 'swilliamson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '497007673',
        ]);
        DB::table('users')->insert([
            'name' => 'Kenneth (Kent) Douglas',
            'email' => 'kdouglas@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '498006833',
        ]);
        DB::table('users')->insert([
            'name' => 'Kathryn Evans',
            'email' => 'kevans@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '501009803',
        ]);
        DB::table('users')->insert([
            'name' => 'Angela Peace',
            'email' => 'apeace@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '505008055',
        ]);
        DB::table('users')->insert([
            'name' => 'Trude Puckett',
            'email' => 'tpuckett@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '508005076',
        ]);
        DB::table('users')->insert([
            'name' => 'Mayo Johnson',
            'email' => 'mjohnson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '509003889',
        ]);
        DB::table('users')->insert([
            'name' => 'Terry Mercing',
            'email' => 'tmercing@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '512007290',
        ]);
        DB::table('users')->insert([
            'name' => 'Stephanie Williams',
            'email' => 'swilliams@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '516002301',
        ]);
        DB::table('users')->insert([
            'name' => 'Alisa Brown',
            'email' => 'abrown@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '518006218',
        ]);
        DB::table('users')->insert([
            'name' => 'Beverly Smith',
            'email' => 'bsmith@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '519009007',
        ]);
        DB::table('users')->insert([
            'name' => 'Mindy Hodges',
            'email' => 'mhodges@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '520003466',
        ]);
        DB::table('users')->insert([
            'name' => 'Teri Cox',
            'email' => 'tcox@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '521007106',
        ]);
        DB::table('users')->insert([
            'name' => 'Jimmy Davis',
            'email' => 'jdavis@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '522001344',
        ]);
        DB::table('users')->insert([
            'name' => 'Samantha White',
            'email' => 'swhite@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '523000700',
        ]);
        DB::table('users')->insert([
            'name' => 'Bonnie Faupel',
            'email' => 'bfaupel@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '525000115',
        ]);
        DB::table('users')->insert([
            'name' => 'Beth Miller',
            'email' => 'bmiller@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '529006429',
        ]);
        DB::table('users')->insert([
            'name' => 'Zachary Perrine',
            'email' => 'zperrine@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '529008311',
        ]);
        DB::table('users')->insert([
            'name' => 'Melissa Douglas',
            'email' => 'mdouglas@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '531002765',
        ]);
        DB::table('users')->insert([
            'name' => 'Phillip Harris',
            'email' => 'pharris@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '531007939',
        ]);
        DB::table('users')->insert([
            'name' => 'Cheryl Moody',
            'email' => 'cmoody@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '535009547',
        ]);
        DB::table('users')->insert([
            'name' => 'Julie Wright-Locke',
            'email' => 'jwright-locke@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '539006314',
        ]);
        DB::table('users')->insert([
            'name' => 'Kimberly Kwee',
            'email' => 'kkwee@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '541002650',
        ]);
        DB::table('users')->insert([
            'name' => 'Carmen Scanlon',
            'email' => 'cscanlon@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '541003679',
        ]);
        DB::table('users')->insert([
            'name' => 'Samuel Gregory',
            'email' => 'sgregory@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '541006430',
        ]);
        DB::table('users')->insert([
            'name' => 'Jerry Armstrong',
            'email' => 'jarmstrong@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '544000692',
        ]);
        DB::table('users')->insert([
            'name' => 'Lara Crane',
            'email' => 'lcrane@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '548006156',
        ]);
        DB::table('users')->insert([
            'name' => 'Samantha Staggs',
            'email' => 'sstaggs@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '549006674',
        ]);
        DB::table('users')->insert([
            'name' => 'Ashlyn Dugan',
            'email' => 'adugan@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '549006859',
        ]);
        DB::table('users')->insert([
            'name' => 'Tracy Pennington',
            'email' => 'tpennington@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '554000538',
        ]);
        DB::table('users')->insert([
            'name' => 'Annie  D. Robinson',
            'email' => 'arobinson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '554007486',
        ]);
        DB::table('users')->insert([
            'name' => 'Nicole Smith',
            'email' => 'nsmith@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '554008661',
        ]);
        DB::table('users')->insert([
            'name' => 'Thomas Price',
            'email' => 'tprice@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '555009273',
        ]);
        DB::table('users')->insert([
            'name' => 'Tommy Bennett',
            'email' => 'tbennett@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '558003626',
        ]);
        DB::table('users')->insert([
            'name' => 'DeAnna Davis',
            'email' => 'ddavis@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '561007513',
        ]);
        DB::table('users')->insert([
            'name' => 'Laura Austin',
            'email' => 'laustin@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '562001405',
        ]);
        DB::table('users')->insert([
            'name' => 'Marilyn Harris',
            'email' => 'mharris@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '564006220',
        ]);
        DB::table('users')->insert([
            'name' => 'Primo Voisin',
            'email' => 'pvoisin@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '569003891',
        ]);
        DB::table('users')->insert([
            'name' => 'Kristin Wagner',
            'email' => 'kwagner@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '569008954',
        ]);
        DB::table('users')->insert([
            'name' => 'Karen Shaw',
            'email' => 'kshaw@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '570007673',
        ]);
        DB::table('users')->insert([
            'name' => 'James Mcafee',
            'email' => 'jmcafee@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '574008779',
        ]);
        DB::table('users')->insert([
            'name' => 'Heather Barnett',
            'email' => 'hbarnett@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '577005139',
        ]);
        DB::table('users')->insert([
            'name' => 'Weeda Jones',
            'email' => 'wjones@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '577006173',
        ]);
        DB::table('users')->insert([
            'name' => 'Amanda Linn',
            'email' => 'alinn@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '577007513',
        ]);
        DB::table('users')->insert([
            'name' => 'Melisa Quesenberry',
            'email' => 'mquesenberry@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '578006417',
        ]);
        DB::table('users')->insert([
            'name' => 'Shannon Clowney',
            'email' => 'sclowney@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '578008384',
        ]);
        DB::table('users')->insert([
            'name' => 'Rebecca Stone',
            'email' => 'rstone@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '579000371',
        ]);
        DB::table('users')->insert([
            'name' => 'Jennifer Gilley',
            'email' => 'jgilley@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '579008433',
        ]);
        DB::table('users')->insert([
            'name' => 'Joe McAfee',
            'email' => 'jmcafee@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '581005203',
        ]);
        DB::table('users')->insert([
            'name' => 'Jennifer Kilmore',
            'email' => 'jkilmore@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '584002107',
        ]);
        DB::table('users')->insert([
            'name' => 'Rachael Rice',
            'email' => 'rrice@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '584007572',
        ]);
        DB::table('users')->insert([
            'name' => 'Madhu Reniguntala',
            'email' => 'mreniguntala@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '588009451',
        ]);
        DB::table('users')->insert([
            'name' => 'Faysal Ahmed',
            'email' => 'fahmed@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '592006311',
        ]);
        DB::table('users')->insert([
            'name' => 'David Cullipher',
            'email' => 'dcullipher@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '596000194',
        ]);
        DB::table('users')->insert([
            'name' => 'Jacob Standley',
            'email' => 'jstandley@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '597007455',
        ]);
        DB::table('users')->insert([
            'name' => 'Neal Farris',
            'email' => 'nfarris@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '602000956',
        ]);
        DB::table('users')->insert([
            'name' => 'Ian Thomas',
            'email' => 'ithomas@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '602001620',
        ]);
        DB::table('users')->insert([
            'name' => 'Anna Mitchell',
            'email' => 'amitchell@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '606001567',
        ]);
        DB::table('users')->insert([
            'name' => 'Don Spitler',
            'email' => 'dspitler@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '608004323',
        ]);
        DB::table('users')->insert([
            'name' => 'Angie Macri',
            'email' => 'amacri@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '608008354',
        ]);
        DB::table('users')->insert([
            'name' => 'Paul Wiltz',
            'email' => 'pwiltz@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '610001420',
        ]);
        DB::table('users')->insert([
            'name' => 'Josh Weaver',
            'email' => 'jweaver@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '610001674',
        ]);
        DB::table('users')->insert([
            'name' => 'Amanda Doyle',
            'email' => 'adoyle@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '610009236',
        ]);
        DB::table('users')->insert([
            'name' => 'Kevin Baer',
            'email' => 'kbaer@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '611001587',
        ]);
        DB::table('users')->insert([
            'name' => 'Heather Murski',
            'email' => 'hmurski@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '613004012',
        ]);
        DB::table('users')->insert([
            'name' => 'William Roark',
            'email' => 'wroark@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '614007511',
        ]);
        DB::table('users')->insert([
            'name' => 'Sandra Kirkpatrick',
            'email' => 'skirkpatrick@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '615001683',
        ]);
        DB::table('users')->insert([
            'name' => 'Deborah Huber',
            'email' => 'dhuber@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '615002567',
        ]);
        DB::table('users')->insert([
            'name' => 'J. Allan Holloway',
            'email' => 'jholloway@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '616009117',
        ]);
        DB::table('users')->insert([
            'name' => 'Patricia Covington',
            'email' => 'pcovington@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '617009030',
        ]);
        DB::table('users')->insert([
            'name' => 'Todd Gold',
            'email' => 'tgold@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '618002384',
        ]);
        DB::table('users')->insert([
            'name' => 'Lisa Fisher',
            'email' => 'lfisher@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '620003509',
        ]);
        DB::table('users')->insert([
            'name' => 'Nicki Feldman',
            'email' => 'nfeldman@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '620006903',
        ]);
        DB::table('users')->insert([
            'name' => 'Stephanie Pierce',
            'email' => 'spierce@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '621009962',
        ]);
        DB::table('users')->insert([
            'name' => 'Terry Ballard',
            'email' => 'tballard@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '622000365',
        ]);
        DB::table('users')->insert([
            'name' => 'Ralph Schultz',
            'email' => 'rschultz@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '623002742',
        ]);
        DB::table('users')->insert([
            'name' => 'Daryl Swinson',
            'email' => 'dswinson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '623008819',
        ]);
        DB::table('users')->insert([
            'name' => 'Matt Bradke',
            'email' => 'mbradke@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '629005445',
        ]);
        DB::table('users')->insert([
            'name' => 'Erin Dail',
            'email' => 'edail@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '631002998',
        ]);
        DB::table('users')->insert([
            'name' => 'Raymond Williams',
            'email' => 'rwilliams@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '631006916',
        ]);
        DB::table('users')->insert([
            'name' => 'Amber Strain',
            'email' => 'astrain@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '632000313',
        ]);
        DB::table('users')->insert([
            'name' => 'Patricia M. Reid',
            'email' => 'preid@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '632004627',
        ]);
        DB::table('users')->insert([
            'name' => 'Holly Bass',
            'email' => 'hbass@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '632004943',
        ]);
        DB::table('users')->insert([
            'name' => 'Sarah Johnson',
            'email' => 'sjohnson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '635001325',
        ]);
        DB::table('users')->insert([
            'name' => 'William Byrd',
            'email' => 'wbyrd@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '635002560',
        ]);
        DB::table('users')->insert([
            'name' => 'Aiwei Borengasser',
            'email' => 'aborengasser@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '637006811',
        ]);
        DB::table('users')->insert([
            'name' => 'Barbara  Wilborn',
            'email' => 'bwilborn@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '638002974',
        ]);
        DB::table('users')->insert([
            'name' => 'Teresa Upshaw Wallent',
            'email' => 'tupshaw wallent@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '639006732',
        ]);
        DB::table('users')->insert([
            'name' => 'Chelsey Moore',
            'email' => 'cmoore@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '640004314',
        ]);
        DB::table('users')->insert([
            'name' => 'Janet Bayless',
            'email' => 'jbayless@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '641001578',
        ]);
        DB::table('users')->insert([
            'name' => 'Constance Hurd',
            'email' => 'churd@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '642001802',
        ]);
        DB::table('users')->insert([
            'name' => 'Michael Julian',
            'email' => 'mjulian@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '644008794',
        ]);
        DB::table('users')->insert([
            'name' => 'Johnnie Green',
            'email' => 'jgreen@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '645001124',
        ]);
        DB::table('users')->insert([
            'name' => 'John Price',
            'email' => 'jprice@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '645002774',
        ]);
        DB::table('users')->insert([
            'name' => 'Terry Johnson',
            'email' => 'tjohnson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '646001139',
        ]);
        DB::table('users')->insert([
            'name' => 'Terrill Beckerman',
            'email' => 'tbeckerman@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '646003951',
        ]);
        DB::table('users')->insert([
            'name' => 'Carolyn Jennings',
            'email' => 'cjennings@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '647009109',
        ]);
        DB::table('users')->insert([
            'name' => 'Floyd Ross',
            'email' => 'fross@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '648005455',
        ]);
        DB::table('users')->insert([
            'name' => 'L. Crecy Ragan',
            'email' => 'lragan@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '649003446',
        ]);
        DB::table('users')->insert([
            'name' => 'Mark Barnes',
            'email' => 'mbarnes@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '650006754',
        ]);
        DB::table('users')->insert([
            'name' => 'Jonathan Childs',
            'email' => 'jchilds@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '651008784',
        ]);
        DB::table('users')->insert([
            'name' => 'Joanna Newkirk',
            'email' => 'jnewkirk@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '652008431',
        ]);
        DB::table('users')->insert([
            'name' => 'LaShundra Watson',
            'email' => 'lwatson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '652008438',
        ]);
        DB::table('users')->insert([
            'name' => 'Jamie Ables',
            'email' => 'jables@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '655004158',
        ]);
        DB::table('users')->insert([
            'name' => 'Darin Archer',
            'email' => 'darcher@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '656009435',
        ]);
        DB::table('users')->insert([
            'name' => 'Cynthia Fletcher',
            'email' => 'cfletcher@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '659005162',
        ]);
        DB::table('users')->insert([
            'name' => 'M. Katie Davis',
            'email' => 'mdavis@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '664001468',
        ]);
        DB::table('users')->insert([
            'name' => 'Debbie Schlesinger',
            'email' => 'dschlesinger@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '665007163',
        ]);
        DB::table('users')->insert([
            'name' => 'Amy Ballard',
            'email' => 'aballard@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '669000216',
        ]);
        DB::table('users')->insert([
            'name' => 'DeAndre Smith',
            'email' => 'dsmith@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '669002045',
        ]);
        DB::table('users')->insert([
            'name' => 'Nick Reeves',
            'email' => 'nreeves@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '669005078',
        ]);
        DB::table('users')->insert([
            'name' => 'Tasha Ward-Henderson',
            'email' => 'tward-henderson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '672008103',
        ]);
        DB::table('users')->insert([
            'name' => 'Jesse Holcomb',
            'email' => 'jholcomb@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '673001613',
        ]);
        DB::table('users')->insert([
            'name' => 'Jeseph Elliott',
            'email' => 'jelliott@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '675005518',
        ]);
        DB::table('users')->insert([
            'name' => 'Cindy Beckett',
            'email' => 'cbeckett@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '676004245',
        ]);
        DB::table('users')->insert([
            'name' => 'Jessica Otto',
            'email' => 'jotto@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '679007700',
        ]);
        DB::table('users')->insert([
            'name' => 'Jessica Sahene',
            'email' => 'jsahene@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '680001492',
        ]);
        DB::table('users')->insert([
            'name' => 'Martha Eschleman',
            'email' => 'meschleman@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '680007336',
        ]);
        DB::table('users')->insert([
            'name' => 'Joe Schneider',
            'email' => 'jschneider@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '682002850',
        ]);
        DB::table('users')->insert([
            'name' => 'John E. Marshall',
            'email' => 'jmarshall@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '682007464',
        ]);
        DB::table('users')->insert([
            'name' => 'Rebecca Sterling',
            'email' => 'rsterling@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '683009509',
        ]);
        DB::table('users')->insert([
            'name' => 'Bonnie Kenney',
            'email' => 'bkenney@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '685004891',
        ]);
        DB::table('users')->insert([
            'name' => 'Cynthia Beckett',
            'email' => 'cbeckett@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '686005687',
        ]);
        DB::table('users')->insert([
            'name' => 'Kirsten Heintz',
            'email' => 'kheintz@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '689001967',
        ]);
        DB::table('users')->insert([
            'name' => 'Monty Self',
            'email' => 'mself@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '690006195',
        ]);
        DB::table('users')->insert([
            'name' => 'Jennifer Stewart',
            'email' => 'jstewart@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '696003148',
        ]);
        DB::table('users')->insert([
            'name' => 'Edward Hale',
            'email' => 'ehale@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '698003578',
        ]);
        DB::table('users')->insert([
            'name' => 'Sherrie Ray-Trevino',
            'email' => 'sray-trevino@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '703006801',
        ]);
        DB::table('users')->insert([
            'name' => 'Carol Parker',
            'email' => 'cparker@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '704006973',
        ]);
        DB::table('users')->insert([
            'name' => 'Janine Armstrong',
            'email' => 'jarmstrong@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '705001866',
        ]);
        DB::table('users')->insert([
            'name' => 'William Lindsey',
            'email' => 'wlindsey@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '705003835',
        ]);
        DB::table('users')->insert([
            'name' => 'Melissa Potter',
            'email' => 'mpotter@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '707001321',
        ]);
        DB::table('users')->insert([
            'name' => 'Margery Wage',
            'email' => 'mwage@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '708004088',
        ]);
        DB::table('users')->insert([
            'name' => 'Joseph John',
            'email' => 'jjohn@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '709008772',
        ]);
        DB::table('users')->insert([
            'name' => 'Siobhan Bartley',
            'email' => 'sbartley@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '709009906',
        ]);
        DB::table('users')->insert([
            'name' => 'Thomas Russell',
            'email' => 'trussell@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '714004486',
        ]);
        DB::table('users')->insert([
            'name' => 'Robert Dixon',
            'email' => 'rdixon@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '714006004',
        ]);
        DB::table('users')->insert([
            'name' => 'Kay Shuttleworth',
            'email' => 'kshuttleworth@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '718005154',
        ]);
        DB::table('users')->insert([
            'name' => 'Jennifer Knetig',
            'email' => 'jknetig@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '718009713',
        ]);
        DB::table('users')->insert([
            'name' => 'Dieterick Govan',
            'email' => 'dgovan@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '719002104',
        ]);
        DB::table('users')->insert([
            'name' => 'Ashley Wyatt',
            'email' => 'awyatt@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '720004027',
        ]);
        DB::table('users')->insert([
            'name' => 'Keith Hearnsberger',
            'email' => 'khearnsberger@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '721006513',
        ]);
        DB::table('users')->insert([
            'name' => 'Sonjia Michaels',
            'email' => 'smichaels@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '721006981',
        ]);
        DB::table('users')->insert([
            'name' => 'Rebecca Chism',
            'email' => 'rchism@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '722004904',
        ]);
        DB::table('users')->insert([
            'name' => 'Keiona Middleton',
            'email' => 'kmiddleton@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '723000846',
        ]);
        DB::table('users')->insert([
            'name' => 'Joey Cole',
            'email' => 'jcole@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '723006559',
        ]);
        DB::table('users')->insert([
            'name' => 'Mary Walla',
            'email' => 'mwalla@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '724002800',
        ]);
        DB::table('users')->insert([
            'name' => 'Cathy Underwood',
            'email' => 'cunderwood@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '724005283',
        ]);
        DB::table('users')->insert([
            'name' => 'Marilyn Barlow',
            'email' => 'mbarlow@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '728002370',
        ]);
        DB::table('users')->insert([
            'name' => 'Tom Hunt',
            'email' => 'thunt@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '729001373',
        ]);
        DB::table('users')->insert([
            'name' => 'Robert Rands',
            'email' => 'rrands@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '729002034',
        ]);
        DB::table('users')->insert([
            'name' => 'Rhonda Carroll',
            'email' => 'rcarroll@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '729007370',
        ]);
        DB::table('users')->insert([
            'name' => 'Courtney Dycus',
            'email' => 'cdycus@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '729007801',
        ]);
        DB::table('users')->insert([
            'name' => 'Jamie Ryan',
            'email' => 'jryan@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '730002635',
        ]);
        DB::table('users')->insert([
            'name' => 'Tatiana Ryckman',
            'email' => 'tryckman@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '732006443',
        ]);
        DB::table('users')->insert([
            'name' => 'George Balogh',
            'email' => 'gbalogh@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '732009017',
        ]);
        DB::table('users')->insert([
            'name' => 'Linda Ducrot',
            'email' => 'lducrot@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '733001383',
        ]);
        DB::table('users')->insert([
            'name' => 'Earl Davis',
            'email' => 'edavis@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '735007044',
        ]);
        DB::table('users')->insert([
            'name' => 'Alandrea Kilpatrick',
            'email' => 'akilpatrick@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '736003203',
        ]);
        DB::table('users')->insert([
            'name' => 'Adrian Correa',
            'email' => 'acorrea@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '736006138',
        ]);
        DB::table('users')->insert([
            'name' => 'James Vinson',
            'email' => 'jvinson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '737000653',
        ]);
        DB::table('users')->insert([
            'name' => 'Brenda Aycock',
            'email' => 'baycock@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '738004251',
        ]);
        DB::table('users')->insert([
            'name' => 'Anissa Ford',
            'email' => 'aford@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '738005234',
        ]);
        DB::table('users')->insert([
            'name' => 'Craig Jones',
            'email' => 'cjones@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '739000581',
        ]);
        DB::table('users')->insert([
            'name' => 'Miriam Karanja',
            'email' => 'mkaranja@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '740001267',
        ]);
        DB::table('users')->insert([
            'name' => 'Shelley Farmer ',
            'email' => 'sfarmer @pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '741004797',
        ]);
        DB::table('users')->insert([
            'name' => 'Regena Bishop',
            'email' => 'rbishop@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '742000627',
        ]);
        DB::table('users')->insert([
            'name' => 'Tammie Deaton',
            'email' => 'tdeaton@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '742008883',
        ]);
        DB::table('users')->insert([
            'name' => 'Gabrielle Haulmark',
            'email' => 'ghaulmark@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '743000886',
        ]);
        DB::table('users')->insert([
            'name' => 'Lisa Lamoureux',
            'email' => 'llamoureux@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '743002901',
        ]);
        DB::table('users')->insert([
            'name' => 'Tachelle Nettles',
            'email' => 'tnettles@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '744007723',
        ]);
        DB::table('users')->insert([
            'name' => 'Mike Pridmore',
            'email' => 'mpridmore@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '745008024',
        ]);
        DB::table('users')->insert([
            'name' => 'Jean Swillum',
            'email' => 'jswillum@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '746006808',
        ]);
        DB::table('users')->insert([
            'name' => 'Jay Sprigg',
            'email' => 'jsprigg@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '747009097',
        ]);
        DB::table('users')->insert([
            'name' => 'George Simonof',
            'email' => 'gsimonof@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '748004893',
        ]);
        DB::table('users')->insert([
            'name' => 'Gregory Heintz',
            'email' => 'gheintz@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '748005457',
        ]);
        DB::table('users')->insert([
            'name' => 'Dustin Johnson',
            'email' => 'djohnson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '748000839',
        ]);
        DB::table('users')->insert([
            'name' => 'Daniel Hoskins',
            'email' => 'dhoskins@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '749002201',
        ]);
        DB::table('users')->insert([
            'name' => 'Lisa TwillieWoodruff',
            'email' => 'ltwilliewoodruff@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '750003862',
        ]);
        DB::table('users')->insert([
            'name' => 'Rhonda Troillett',
            'email' => 'rtroillett@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '750004487',
        ]);
        DB::table('users')->insert([
            'name' => 'Helen Snyder',
            'email' => 'hsnyder@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '751002538',
        ]);
        DB::table('users')->insert([
            'name' => 'Lacee Werdehausen',
            'email' => 'lwerdehausen@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '755008775',
        ]);
        DB::table('users')->insert([
            'name' => 'Matthew Franks',
            'email' => 'mfranks@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '756004452',
        ]);
        DB::table('users')->insert([
            'name' => 'Theresa Allred',
            'email' => 'tallred@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '757008237',
        ]);
        DB::table('users')->insert([
            'name' => 'Stella Bowers',
            'email' => 'sbowers@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '761003395',
        ]);
        DB::table('users')->insert([
            'name' => 'Brannon Runions',
            'email' => 'brunions@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '762005847',
        ]);
        DB::table('users')->insert([
            'name' => 'Suzanne Reed',
            'email' => 'sreed@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '766002715',
        ]);
        DB::table('users')->insert([
            'name' => 'Jaafar Alazzawi',
            'email' => 'jalazzawi@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '766004952',
        ]);
        DB::table('users')->insert([
            'name' => 'Doug Ford',
            'email' => 'dford@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '767003155',
        ]);
        DB::table('users')->insert([
            'name' => 'Tyrrell Schneider',
            'email' => 'tschneider@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '768007135',
        ]);
        DB::table('users')->insert([
            'name' => 'Terry Hunkapiller',
            'email' => 'thunkapiller@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '771006452',
        ]);
        DB::table('users')->insert([
            'name' => 'Allan Lemmon',
            'email' => 'alemmon@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '773000377',
        ]);
        DB::table('users')->insert([
            'name' => 'Stephanie Sheppard',
            'email' => 'ssheppard@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '773007057',
        ]);
        DB::table('users')->insert([
            'name' => 'Traci Johnston',
            'email' => 'tjohnston@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '774002757',
        ]);
        DB::table('users')->insert([
            'name' => 'Sarah Buford',
            'email' => 'sbuford@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '774004561',
        ]);
        DB::table('users')->insert([
            'name' => 'Denise Hammett',
            'email' => 'dhammett@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '778000844',
        ]);
        DB::table('users')->insert([
            'name' => 'Denies Matlock',
            'email' => 'dmatlock@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '779002781',
        ]);
        DB::table('users')->insert([
            'name' => 'Calvin White',
            'email' => 'cwhite@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '781002203',
        ]);
        DB::table('users')->insert([
            'name' => 'Eugene Rathfon',
            'email' => 'erathfon@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '782003804',
        ]);
        DB::table('users')->insert([
            'name' => 'Amanda Willey  ',
            'email' => 'awilley  @pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '785005475',
        ]);
        DB::table('users')->insert([
            'name' => 'James Hunt',
            'email' => 'jhunt@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '788005486',
        ]);
        DB::table('users')->insert([
            'name' => 'Greg Drzazgowski',
            'email' => 'gdrzazgowski@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '791004703',
        ]);
        DB::table('users')->insert([
            'name' => 'Karen Trevino',
            'email' => 'ktrevino@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '791007446',
        ]);
        DB::table('users')->insert([
            'name' => 'Kami Wentz',
            'email' => 'kwentz@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '794004927',
        ]);
        DB::table('users')->insert([
            'name' => 'Julia Gibbins',
            'email' => 'jgibbins@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '794007468',
        ]);
        DB::table('users')->insert([
            'name' => 'Robert Musser',
            'email' => 'rmusser@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '795009119',
        ]);
        DB::table('users')->insert([
            'name' => 'Michelle Herrera',
            'email' => 'mherrera@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '796000965',
        ]);
        DB::table('users')->insert([
            'name' => 'Caron Bowen',
            'email' => 'cbowen@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '796008056',
        ]);
        DB::table('users')->insert([
            'name' => 'Anna  Ortiz',
            'email' => 'aortiz@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '799008766',
        ]);
        DB::table('users')->insert([
            'name' => 'Karen Jensen',
            'email' => 'kjensen@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '801001151',
        ]);
        DB::table('users')->insert([
            'name' => 'Mike Leach',
            'email' => 'mleach@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '801002557',
        ]);
        DB::table('users')->insert([
            'name' => 'Deborah Ahring',
            'email' => 'dahring@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '801008278',
        ]);
        DB::table('users')->insert([
            'name' => 'Jeffrey Fischer',
            'email' => 'jfischer@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '803003934',
        ]);
        DB::table('users')->insert([
            'name' => 'Phillipe Ducrot',
            'email' => 'pducrot@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '803007613',
        ]);
        DB::table('users')->insert([
            'name' => 'Jomeka Mosby',
            'email' => 'jmosby@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '805003823',
        ]);
        DB::table('users')->insert([
            'name' => 'J Robyn Spence',
            'email' => 'jspence@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '808005565',
        ]);
        DB::table('users')->insert([
            'name' => 'Bernica Tackett',
            'email' => 'btackett@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '814007697',
        ]);
        DB::table('users')->insert([
            'name' => 'Lekita Pounds',
            'email' => 'lpounds@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '816005499',
        ]);
        DB::table('users')->insert([
            'name' => 'Brian Hight',
            'email' => 'bhight@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '823000277',
        ]);
        DB::table('users')->insert([
            'name' => 'James (Jim) Pearson',
            'email' => 'jpearson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '824006033',
        ]);
        DB::table('users')->insert([
            'name' => 'Jayne Pyle',
            'email' => 'jpyle@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '825000977',
        ]);
        DB::table('users')->insert([
            'name' => 'Andy Turner',
            'email' => 'aturner@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '825002201',
        ]);
        DB::table('users')->insert([
            'name' => 'Leslie Omalley',
            'email' => 'lomalley@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '826003461',
        ]);
        DB::table('users')->insert([
            'name' => 'Melody Berning',
            'email' => 'mberning@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '827006565',
        ]);
        DB::table('users')->insert([
            'name' => 'Anna Tanner',
            'email' => 'atanner@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '828000334',
        ]);
        DB::table('users')->insert([
            'name' => 'Sherelle Lee',
            'email' => 'slee@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '828006010',
        ]);
        DB::table('users')->insert([
            'name' => 'Jim Porter',
            'email' => 'jporter@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '830003066',
        ]);
        DB::table('users')->insert([
            'name' => 'Bruce Schulte',
            'email' => 'bschulte@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '831009198',
        ]);
        DB::table('users')->insert([
            'name' => 'Renee Smith',
            'email' => 'rsmith@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '833005405',
        ]);
        DB::table('users')->insert([
            'name' => 'Mrghan Cantlon',
            'email' => 'mcantlon@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '836005496',
        ]);
        DB::table('users')->insert([
            'name' => 'Stephanie Phillips',
            'email' => 'sphillips@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '837006898',
        ]);
        DB::table('users')->insert([
            'name' => 'Jason Martin',
            'email' => 'jmartin@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '838006634',
        ]);
        DB::table('users')->insert([
            'name' => 'Berna Love',
            'email' => 'blove@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '841007550',
        ]);
        DB::table('users')->insert([
            'name' => 'Jack Wood',
            'email' => 'jwood@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '842005659',
        ]);
        DB::table('users')->insert([
            'name' => 'Jeff Dixon',
            'email' => 'jdixon@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '843000928',
        ]);
        DB::table('users')->insert([
            'name' => 'Joe Guy',
            'email' => 'jguy@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '845003182',
        ]);
        DB::table('users')->insert([
            'name' => 'J. Don Keller',
            'email' => 'jkeller@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '847002004',
        ]);
        DB::table('users')->insert([
            'name' => 'Jessica Martin',
            'email' => 'jmartin@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '847008000',
        ]);
        DB::table('users')->insert([
            'name' => 'Tressa Ashberry',
            'email' => 'tashberry@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '847008922',
        ]);
        DB::table('users')->insert([
            'name' => 'Michael Mills',
            'email' => 'mmills@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '848003937',
        ]);
        DB::table('users')->insert([
            'name' => 'Michael Harris',
            'email' => 'mharris@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '848004726',
        ]);
        DB::table('users')->insert([
            'name' => 'Antonia Garcia',
            'email' => 'agarcia@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '851003569',
        ]);
        DB::table('users')->insert([
            'name' => 'LaTasha Ursery',
            'email' => 'lursery@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '853007221',
        ]);
        DB::table('users')->insert([
            'name' => 'Anna Pagan',
            'email' => 'apagan@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '855000744',
        ]);
        DB::table('users')->insert([
            'name' => 'Suzanne Campbell',
            'email' => 'scampbell@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '855009316',
        ]);
        DB::table('users')->insert([
            'name' => 'Rachel Miller',
            'email' => 'rmiller@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '856005483',
        ]);
        DB::table('users')->insert([
            'name' => 'Debbie Scharbor',
            'email' => 'dscharbor@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '857001431',
        ]);
        DB::table('users')->insert([
            'name' => 'Steven Eisenberg',
            'email' => 'seisenberg@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '857005924',
        ]);
        DB::table('users')->insert([
            'name' => 'William Ginocchio',
            'email' => 'wginocchio@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '858004108',
        ]);
        DB::table('users')->insert([
            'name' => 'Frank Opitz',
            'email' => 'fopitz@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '859005632',
        ]);
        DB::table('users')->insert([
            'name' => 'Joshua Johnson',
            'email' => 'jjohnson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '859009670',
        ]);
        DB::table('users')->insert([
            'name' => 'Christie Sherrill',
            'email' => 'csherrill@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '860006751',
        ]);
        DB::table('users')->insert([
            'name' => 'Dora Bradley',
            'email' => 'dbradley@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '865006358',
        ]);
        DB::table('users')->insert([
            'name' => 'Frank Latimer',
            'email' => 'flatimer@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '865007913',
        ]);
        DB::table('users')->insert([
            'name' => 'Vince Gemmiti',
            'email' => 'vgemmiti@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '866001643',
        ]);
        DB::table('users')->insert([
            'name' => 'Jerri Shertzer',
            'email' => 'jshertzer@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '866007131',
        ]);
        DB::table('users')->insert([
            'name' => 'Martha (MJ) Bennett',
            'email' => 'mbennett@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '866009908',
        ]);
        DB::table('users')->insert([
            'name' => 'Kristi Tucker',
            'email' => 'ktucker@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '868005387',
        ]);
        DB::table('users')->insert([
            'name' => 'Steven Bryan Frazer',
            'email' => 'sfrazer@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '870008382',
        ]);
        DB::table('users')->insert([
            'name' => 'Angel Dorsey',
            'email' => 'adorsey@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '872003371',
        ]);
        DB::table('users')->insert([
            'name' => 'Alicia Boatwright',
            'email' => 'aboatwright@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '874002175',
        ]);
        DB::table('users')->insert([
            'name' => 'Stacey Boone',
            'email' => 'sboone@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '878009119',
        ]);
        DB::table('users')->insert([
            'name' => 'Betty Raper',
            'email' => 'braper@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '882005622',
        ]);
        DB::table('users')->insert([
            'name' => 'S. Whittington Brown',
            'email' => 'sbrown@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '883008368',
        ]);
        DB::table('users')->insert([
            'name' => 'April Hearne',
            'email' => 'ahearne@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '884009456',
        ]);
        DB::table('users')->insert([
            'name' => 'Jasmine Greer',
            'email' => 'jgreer@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '889004556',
        ]);
        DB::table('users')->insert([
            'name' => 'Chris Weaver',
            'email' => 'cweaver@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '892005536',
        ]);
        DB::table('users')->insert([
            'name' => 'Shana Wilson',
            'email' => 'swilson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '893001094',
        ]);
        DB::table('users')->insert([
            'name' => 'Amy Garst',
            'email' => 'agarst@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '893005947',
        ]);
        DB::table('users')->insert([
            'name' => 'Deborly Wade',
            'email' => 'dwade@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '893006539',
        ]);
        DB::table('users')->insert([
            'name' => 'Carol Gale',
            'email' => 'cgale@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '894006935',
        ]);
        DB::table('users')->insert([
            'name' => 'Reba Treece',
            'email' => 'rtreece@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '896002180',
        ]);
        DB::table('users')->insert([
            'name' => 'Jesse Hall',
            'email' => 'jhall@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '899001692',
        ]);
        DB::table('users')->insert([
            'name' => 'Jan Lewandowski',
            'email' => 'jlewandowski@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '899006421',
        ]);

        DB::table('users')->insert([
            'name' => 'Joyce Person',
            'email' => 'jperson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '858006337',
        ]);

        DB::table('users')->insert([
            'name' => 'Yong Park',
            'email' => 'ypark@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '482003521',
        ]);

        DB::table('users')->insert([
            'name' => 'Ashley Steele',
            'email' => 'asteele@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '549003203',
        ]);

        DB::table('users')->insert([
            'name' => 'Somerly Mustin',
            'email' => 'smustin@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '337001624',
        ]);
        DB::table('users')->insert([
            'name' => 'Shanda Winkowski-Thornton',
            'email' => 'swinkowski-thornton@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '161006585',
        ]);
        DB::table('users')->insert([
            'name' => 'Karen Johnson',
            'email' => 'kjohnson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '419007640',
        ]);
        DB::table('users')->insert([
            'name' => 'Sharee Young',
            'email' => 'syoung@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '602008678',
        ]);

        DB::table('users')->insert([
            'name' => 'Rachel Caruthers',
            'email' => 'rcaruthers@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '552001540',
        ]);

        DB::table('users')->insert([
            'name' => 'Randall Aragon',
            'email' => 'raragon@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '369007188',
        ]);

        DB::table('users')->insert([
            'name' => 'Connelly Weeks',
            'email' => 'cweeks@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '160005517',
        ]);

        DB::table('users')->insert([
            'name' => 'Susan James',
            'email' => 'sjames@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '613007700',
        ]);

        DB::table('users')->insert([
            'name' => 'James McAfee',
            'email' => 'jmcafee@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '845004540',
        ]);

        DB::table('users')->insert([
            'name' => 'Cathy Kincaid',
            'email' => 'ckincaid@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '610006657',
        ]);

        DB::table('users')->insert([
            'name' => 'Shaun Everest',
            'email' => 'severest@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '608001104',
        ]);
        DB::table('users')->insert([
            'name' => 'Wendy Schay',
            'email' => 'wschay@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '442007533',
        ]);
        DB::table('users')->insert([
            'name' => 'Stephen Edds',
            'email' => 'sedds@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '692008098',
        ]);
        DB::table('users')->insert([
            'name' => 'Gary Garner',
            'email' => 'ggarner@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '785008303',
        ]);
        DB::table('users')->insert([
            'name' => 'Richard Kron',
            'email' => 'rkron@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '501001870',
        ]);

        DB::table('users')->insert([
            'name' => 'Patty McCormack',
            'email' => 'pmccormack@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '360009296',
        ]);
        DB::table('users')->insert([
            'name' => 'Mitchell Berlin',
            'email' => 'mberlin@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '169001136',
        ]);
        DB::table('users')->insert([
            'name' => 'Jinnings Burress',
            'email' => 'jburress@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '397002719',
        ]);
        DB::table('users')->insert([
            'name' => 'Jacqueline Smith',
            'email' => 'jsmith@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '232006591',
        ]);
        DB::table('users')->insert([
            'name' => 'William Allen',
            'email' => 'wallen@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '586009398',
        ]);





        DB::table('users')->insert([
            'name' => 'Marsha Norwood',
            'email' => 'mnorwood@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '203001039',
        ]);


        DB::table('users')->insert([
            'name' => 'Jonathan Russ',
            'email' => 'jruss@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '209004613',
        ]);
        DB::table('users')->insert([
            'name' => 'Justin Sangster',
            'email' => 'jsangster@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '530008272',
        ]);
        DB::table('users')->insert([
            'name' => 'Jeffery Shaw',
            'email' => 'jshaw@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '853001032',
        ]);

        DB::table('users')->insert([
            'name' => 'Lana Riding',
            'email' => 'lriding@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '633008214',
        ]);
        DB::table('users')->insert([
            'name' => 'Robin Reed',
            'email' => 'rreed@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '706009266',
        ]);
        DB::table('users')->insert([
            'name' => 'Ann Fellinger',
            'email' => 'afellinger@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '753007367',
        ]);
        DB::table('users')->insert([
            'name' => 'Carlos Miller',
            'email' => 'cmiller@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '447007543',
        ]);
        DB::table('users')->insert([
            'name' => 'Jill McDonald',
            'email' => 'jmcdonald@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '356005257',
        ]);
        DB::table('users')->insert([
            'name' => 'Mimi Mcafee',
            'email' => 'mmcafee@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '351007087',
        ]);
        DB::table('users')->insert([
            'name' => 'Robert Hall',
            'email' => 'rhall@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '431005106',
        ]);
        DB::table('users')->insert([
            'name' => 'Jerry Elliot',
            'email' => 'jelliot@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '403009250',
        ]);
        DB::table('users')->insert([
            'name' => 'Shana Graves',
            'email' => 'sgraves@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '871008762',
        ]);
        DB::table('users')->insert([
            'name' => 'Carita Alexander',
            'email' => 'calexander@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '233001777',
        ]);

        DB::table('users')->insert([
            'name' => 'Anthony Giglia',
            'email' => 'agiglia@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '360008974',
        ]);
        DB::table('users')->insert([
            'name' => 'Charlotte Lewallen',
            'email' => 'clewallen@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '801002997',
        ]);
        DB::table('users')->insert([
            'name' => 'Jason McFadden',
            'email' => 'jmcfadden@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '802000439',
        ]);
        DB::table('users')->insert([
            'name' => 'Lyndi Mullinax',
            'email' => 'lmullinax@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '853002785',
        ]);
        DB::table('users')->insert([
            'name' => 'Kevin Cummings',
            'email' => 'kcummings@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '671007096',
        ]);
        DB::table('users')->insert([
            'name' => 'Cynthia Booker',
            'email' => 'cbooker@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '771002393',
        ]);
        DB::table('users')->insert([
            'name' => 'Regina Howard',
            'email' => 'rhoward@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '560006650',
        ]);
        DB::table('users')->insert([
            'name' => 'Katie Carr',
            'email' => 'kcarr@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '290001103',
        ]);
        DB::table('users')->insert([
            'name' => 'Felicia Russell-Wilson',
            'email' => 'frussell-wilson@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '309000341',
        ]);
        DB::table('users')->insert([
            'name' => 'Marsha Garrett',
            'email' => 'mgarrett@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '715007556',
        ]);
        DB::table('users')->insert([
            'name' => 'Bobby Myers',
            'email' => 'bmyers@pulaskitech.edu',
            'password' => bcrypt('Letmein123'),
            'certified' => 1,
            'isAdmin' => 0,
            'personal_id' => '162009209',
        ]);


    }
}
