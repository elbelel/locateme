<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $facilities = [
            ['id' => 1, 'name' => 'Football'],
            ['id' => 2, 'name' => 'Basketball'],
            ['id' => 3, 'name' => 'Tennis'],
            ['id' => 4, 'name' => 'Health bar'],
            // ['id' => 5, 'name' => 'John doe'],
        ];

        DB::table('facilities')->insert($facilities);
    }
}
