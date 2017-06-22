<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
           [
             'id'=>1,
             'name'=>'Computer Science',
             'created_at'=>new DateTime,
             'updated_at'=>new DateTime
           ]
        ];

        Department::insert($departments);
    }
}
