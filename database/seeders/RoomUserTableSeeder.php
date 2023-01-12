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
            'date'=>'20230112',
            'startTime'=>'10:00:00',
            'is_reserved'=>'1'
            
        
            ]);
       DB::table('room_user')->insert([
        
            'user_id'=> '1',
            'room_id' => '1',
            'date'=>'20230112',
            'startTime'=>'10:00:00',
            'is_reserved'=>'0'
           ]);  
    }
}
