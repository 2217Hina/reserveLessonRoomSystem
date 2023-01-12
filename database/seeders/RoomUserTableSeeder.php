<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('room_user')->insert([
        
            'user_id'=> '1',
            'room_id' => '1',
           'dateTime'=>'20220111'
            ]);
        DB::table('room_user')->insert([
        
            'user_id'=> '1',
            'room_id' => '1',
           'dateTime'=>'20220111'
            ]);
    }
}
