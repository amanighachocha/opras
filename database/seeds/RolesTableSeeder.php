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
               'name'=>'Administrator',
               'key'=>'admin',
               'created_at'=>new DateTime,
               'updated_at'=>new DateTime
            ],

            [
               'id'=>2,
               'name'=>'Director',
               'key'=>'director',
               'created_at'=>new DateTime,
               'updated_at'=>new DateTime
            ],

            [
               'id'=>3,
               'name'=>'Manager',
               'key'=>'manager',
               'created_at'=>new DateTime,
               'updated_at'=>new DateTime
            ],

            [
               'id'=>4,
               'name'=>'Employee',
               'key'=>'employee',
               'created_at'=>new DateTime,
               'updated_at'=>new DateTime
            ]
        ];

        Role::insert($roles);
    }
}
