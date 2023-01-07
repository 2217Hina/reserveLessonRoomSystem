<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'SachiOhori',
            'student_num' => '2119201',
            'email' => 'test@test',
            'major' =>'piano',
            'professor' =>'SaitoHannna',
            'password' =>'password'
             ]);
    }
}
