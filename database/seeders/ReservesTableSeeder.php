<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('reserves')->insert([
        
            'user_id'=> '1',
            'room_id' => '1',
            'date'=>'2023-01-31',
            'startTime'=>'10:00:00',
            'numOfPeople'=>'1',
            'is_reserved'=>'1'
            
        
            ]);
       DB::table('reserves')->insert([
        
            'user_id'=> '2',
            'room_id' => '2',
            'date'=>'2023-02-01',
            'startTime'=>'10:00:00',
             'numOfPeople'=>'3',
            'is_reserved'=>'1'
           ]);  
           
            DB::table('reserves')->insert([
        
            'user_id'=> '3',
            'room_id' => '3',
            'date'=>'2023-02-04',
            'startTime'=>'10:00:00',
             'numOfPeople'=>'2',
            'is_reserved'=>'1'
           ]);  
           
            DB::table('reserves')->insert([
        
            'user_id'=> '4',
            'room_id' => '4',
            'date'=>'2023-02-05',
            'startTime'=>'10:00:00',
             'numOfPeople'=>'1',
            'is_reserved'=>'1'
           ]);  
           
            DB::table('reserves')->insert([
        
            'user_id'=> '5',
            'room_id' => '4',
            'date'=>'2023-02-06',
            'startTime'=>'10:00:00',
             'numOfPeople'=>'3',
            'is_reserved'=>'1'
           ]);  
           
            DB::table('reserves')->insert([
        
            'user_id'=> '6',
            'room_id' => '6',
            'date'=>'2023-02-07',
            'startTime'=>'10:00:00',
             'numOfPeople'=>'2',
            'is_reserved'=>'1'
           ]);  
           
           
            DB::table('reserves')->insert([
        
            'user_id'=> '1',
            'room_id' => '1',
            'date'=>'2023-01-27',
            'startTime'=>'10:00:00',
            'numOfPeople'=>'1',
            'is_reserved'=>'1'
            ]);
            
            DB::table('reserves')->insert([
        
            'user_id'=> '1',
            'room_id' => '2',
            'date'=>'2023-01-27',
            'startTime'=>'10:00:00',
            'numOfPeople'=>'1',
            'is_reserved'=>'1'
            
        
        
            ]);
    }
}
