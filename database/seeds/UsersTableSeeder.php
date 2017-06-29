<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
           [
              'id'=>1,
              'first_name'=>'Amani',
              'last_name'=>'Ghachocha',
              'email'=>'amanighachocha@gmail.com',
              'password'=>Hash::make('admin123'),
              'department_id'=>1,
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime
           ],

           [
              'id'=>2,
              'first_name'=>'Martin',
              'last_name'=>'Lyuba',
              'email'=>'lyuba@ifm.ac.tz',
              'password'=>Hash::make('admin123'),
              'department_id'=>2,
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime
           ],

           [
              'id'=>3,
              'first_name'=>'Vero',
              'last_name'=>'Mpombo',
              'email'=>'vero@ifm.ac.tz',
              'password'=>Hash::make('admin123'),
              'department_id'=>2,
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime
           ]
           
        ];

        User::insert($users);
    }
}
