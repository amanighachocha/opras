<?php

use Illuminate\Database\Seeder;
use App\Report;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reports = [
           [
             'title'=>'Server configuration',
             'content'=>'Server configured successfully',
             'user_id'=>3,
             'reportable_id'=>1,
             'reportable_type'=>'main',
             'created_at'=>new DateTime,
             'updated_at'=>new DateTime
           ],

           [
             'title'=>'Computer science budget',
             'content'=>'Budget submitted successfully',
             'user_id'=>3,
             'reportable_id'=>3,
             'reportable_type'=>'sub',
             'created_at'=>new DateTime,
             'updated_at'=>new DateTime
           ]
        ];

        Report::insert($reports);
    }
}
