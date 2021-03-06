<?php

use Illuminate\Database\Seeder;
use App\UserAccount;

class UserAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accounts = [
            [
               'user_id'=>1,
               'role_id'=>1
            ],

            [
               'user_id'=>2,
               'role_id'=>2
            ],

            [
               'user_id'=>3,
               'role_id'=>3
            ],

            [
               'user_id'=>1,
               'role_id'=>3
            ]
        ];

        UserAccount::insert($accounts);
    }
}
