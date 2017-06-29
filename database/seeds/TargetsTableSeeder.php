<?php

use Illuminate\Database\Seeder;
use App\Target;

class TargetsTableSeeder extends Seeder
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
             'name'=>'Deploy OPRAS System',
             'user_id'=>1,
             'created_at'=>new DateTime,
             'updated_at'=>new DateTime
           ],

           [
             'id'=>2,
             'name'=>'Submit budget',
             'user_id'=>2,
             'created_at'=>new DateTime,
             'updated_at'=>new DateTime
           ]
        ];

        Target::insert($targets);
    }
}
