<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Account;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Account::factory(10)->create();

        DB::table('account')->insert([
            'a_id' => '9696445',
            'f_name' => 'Good',
            'l_name' => 'Admin',
            'e_mail' => 'goodadmin@gmail.com',
            'p_id' => '2',
            'password' => Hash::make("adminpass")
        ]);
    }
}
