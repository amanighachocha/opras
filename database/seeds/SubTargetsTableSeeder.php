<?php

use Illuminate\Database\Seeder;
use App\SubTarget;

class SubTargetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $targets = [
           [
             'id'=>1,
             'name'=>'Configure server',
             'target_id'=>1,
             'user_id'=>3,
             'created_at'=>new DateTime,
             'updated_at'=>new DateTime
           ],

           [
             'id'=>2,
             'name'=>'Run Unit tests',
             'target_id'=>1,
             'user_id'=>2,
             'created_at'=>new DateTime,
             'updated_at'=>new DateTime
           ],

           [
             'id'=>3,
             'name'=>'Compile department budgets',
             'target_id'=>2,
             'user_id'=>2,
             'created_at'=>new DateTime,
             'updated_at'=>new DateTime
           ]
        ];

        SubTarget::insert($targets);

    }
}
