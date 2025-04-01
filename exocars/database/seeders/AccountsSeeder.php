<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Accounts;

class AccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Accounts::factory(10)->create();

        DB::table('accounts')->insert([
            'a_id' => '9696445',
            'f_name' => 'Good',
            'l_name' => 'Admin',
            'e_mail' => 'goodadmin@gmail.com',
            'p_id' => '2',
            'password' => Hash::make("adminpass")
        ]);
    }
}
