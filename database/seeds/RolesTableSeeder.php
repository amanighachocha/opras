<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
               'id'=>1,
               'display_name'=>'Administrator',
               'name'=>'admin',
               'created_at'=>new DateTime,
               'updated_at'=>new DateTime
            ],

            [
               'id'=>2,
               'display_name'=>'Director',
               'name'=>'director',
               'created_at'=>new DateTime,
               'updated_at'=>new DateTime
            ],

            [
               'id'=>3,
               'display_name'=>'Manager',
               'name'=>'manager',
               'created_at'=>new DateTime,
               'updated_at'=>new DateTime
            ],

            [
               'id'=>4,
               'display_name'=>'Employee',
               'name'=>'employee',
               'created_at'=>new DateTime,
               'updated_at'=>new DateTime
            ]
        ];

        Role::insert($roles);
    }
}
