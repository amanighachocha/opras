<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(DepartmentsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UserAccountsTableSeeder::class);
        $this->call(TargetsTableSeeder::class);
        $this->call(SubTargetsTableSeeder::class);
        $this->call(ReportsTableSeeder::class);
    }
}
