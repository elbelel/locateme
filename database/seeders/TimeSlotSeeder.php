<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        //
        $times = [
            ['id' => 1, 'start_date_time' => '00:08:00', 'end_date_time'=>'00:09:00'],
            ['id' => 2, 'start_date_time' => '00:09:00', 'end_date_time'=>'00:10:00'],
            ['id' => 3, 'start_date_time' => '00:11:00', 'end_date_time'=>'00:12:00'],
            ['id' => 4, 'start_date_time' => '00:13:00', 'end_date_time'=>'00:14:00'],
            ['id' => 5, 'start_date_time' => '00:15:00', 'end_date_time'=>'00:16:00'],
            ['id' => 6, 'start_date_time' => '00:17:00', 'end_date_time'=>'00:18:00'],
        ];

        DB::table('time_slots')->insert($times);
    }
}
