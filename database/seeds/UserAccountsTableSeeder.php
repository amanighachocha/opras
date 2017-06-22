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
               'id'=>1,
               'user_id'=>1,
               'role_id'=>1,
               'created_at'=>new DateTime,
               'updated_at'=>new DateTime
            ]
        ];

        UserAccount::insert($accounts);
    }
}
