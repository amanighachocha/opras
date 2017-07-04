<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           [
              'id'=>1,
              'name'=>'view-users',
              'display_name'=>'View users',
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime
           ],

           [
              'id'=>2,
              'name'=>'edit-users',
              'display_name'=>'Edit users',
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime
           ],

           [
              'id'=>3,
              'name'=>'add-users',
              'display_name'=>'Add users',
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime
           ],

           [
              'id'=>4,
              'name'=>'delete-users',
              'display_name'=>'Delete users',
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime
           ],

           [
              'id'=>5,
              'name'=>'view-roles',
              'display_name'=>'View roles',
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime
           ],

           [
              'id'=>6,
              'name'=>'edit-roles',
              'display_name'=>'Edit roles',
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime
           ],

           [
              'id'=>7,
              'name'=>'add-roles',
              'display_name'=>'Add roles',
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime
           ],

           [
              'id'=>8,
              'name'=>'delete-roles',
              'display_name'=>'Delete roles',
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime
           ]
        ];

        Permission::insert($permissions);
    }
}
