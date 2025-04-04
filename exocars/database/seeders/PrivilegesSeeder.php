<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivilegesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $privileges = [['p_id' => '1', 'privilege_name' => 'user'], ['p_id' => '2', 'privilege_name' => 'admin']];
        foreach ($privileges as $privilege) {
            DB::table('privileges')->insert($privilege);
        }
    }
}
