<?php

use Illuminate\Database\Seeder;

class RolesPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => '1',
            'name' => 'Admin'
        ]);
        DB::table('roles')->insert([
            'id' => '3',
            'name' => 'Viewer'
        ]);
        DB::table('roles')->insert([
            'id' => '4',
            'name' => 'SuperAdmin'
        ]);

        DB::table('permissions')->insert([
            'id' => '1',
            'name' => 'AddSessions'
        ]);
        DB::table('permissions')->insert([
            'id' => '2',
            'name' => 'ViewCompletions'
        ]);
        DB::table('permissions')->insert([
            'id' => '3',
            'name' => 'EditRolesPerms'
        ]);

        DB::table('role_users')->insert([
            'role_id' => '1',
            'user_id' => '1'
        ]);
        DB::table('role_users')->insert([
            'role_id' => '3',
            'user_id' => '1'
        ]);
        DB::table('role_users')->insert([
            'role_id' => '4',
            'user_id' => '1'
        ]);
        DB::table('role_users')->insert([
            'role_id' => '3',
            'user_id' => '2'
        ]);
        DB::table('role_users')->insert([
            'role_id' => '1',
            'user_id' => '3'
        ]);
        DB::table('role_users')->insert([
            'role_id' => '3',
            'user_id' => '3'
        ]);
        DB::table('role_users')->insert([
            'role_id' => '3',
            'user_id' => '8'
        ]);

        DB::table('permission_roles')->insert([
            'permission_id' => '1',
            'role_id' => '1'
        ]);
        DB::table('permission_roles')->insert([
            'permission_id' => '2',
            'role_id' => '1'
        ]);
        DB::table('permission_roles')->insert([
            'permission_id' => '2',
            'role_id' => '3'
        ]);
        DB::table('permission_roles')->insert([
            'permission_id' => '1',
            'role_id' => '4'
        ]);
        DB::table('permission_roles')->insert([
            'permission_id' => '2',
            'role_id' => '4'
        ]);
        DB::table('permission_roles')->insert([
            'permission_id' => '3',
            'role_id' => '4'
        ]);
    }
}
