<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $meetings = [
            ['a_id' => '1', 'c_id' => '2', 'date' => '2025-05-30', 'time' => '10:30'],
            ['a_id' => '7', 'c_id' => '2', 'date' => '2025-05-30', 'time' => '12:30']
        ];

        foreach ($meetings as $meeting) {
            DB::table('meeting')->insert($meeting);
        }
    }
}
