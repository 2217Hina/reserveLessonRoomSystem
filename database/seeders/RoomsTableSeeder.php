<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('rooms')->insert([
            'room_num' => 'A1',
            'capacity' => '3',
            'piano' => 'grand',
            ]);
            
             DB::table('rooms')->insert([
            'room_num' => 'A2',
            'capacity' => '3',
            'piano' => 'grand',
            ]);
            
             DB::table('rooms')->insert([
            'room_num' => 'A3',
            'capacity' => '3',
            'piano' => 'grand',
            ]);
            
             DB::table('rooms')->insert([
            'room_num' => 'B1',
            'capacity' => '5',
            'piano' => 'grand',
            ]);
            
             DB::table('rooms')->insert([
            'room_num' => 'B2',
            'capacity' => '5',
            'piano' => 'grand',
            ]);
            
             DB::table('rooms')->insert([
            'room_num' => 'C1',
            'capacity' => '5',
            'piano' => 'upright',
            ]);
            
             DB::table('rooms')->insert([
            'room_num' => 'C2',
            'capacity' => '5',
            'piano' => 'upright',
            ]);
            
             DB::table('rooms')->insert([
            'room_num' => 'C3',
            'capacity' => '5',
            'piano' => 'upright',
            ]);
            
             DB::table('rooms')->insert([
            'room_num' => 'D1',
            'capacity' => '7',
            'piano' => 'upright',
            ]);
            
             DB::table('rooms')->insert([
            'room_num' => 'D2',
            'capacity' => '7',
            'piano' => 'upright',
            ]);
    }
}
