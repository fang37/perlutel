<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'student',
            'display_name' => 'Student',
            'description' => 'Student Roles',
        ]);

        DB::table('roles')->insert([
            'name' => 'faculty',
            'display_name' => 'faculty',
            'description' => 'Faculty Roles',
        ]);
    }
}
