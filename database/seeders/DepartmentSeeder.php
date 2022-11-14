<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = array(
            array('id' => '2','name' => 'قسم الأنتاج','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','name' => 'قسم المشتريات','created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','name' => 'قسم التجريب','created_at' => NULL,'updated_at' => NULL),
            array('id' => '5','name' => 'قسم الإتلاف','created_at' => NULL,'updated_at' => NULL),
            array('id' => '10','name' => 'قسم تحضير الشراب','created_at' => '2022-09-03 06:25:18','updated_at' => '2022-09-03 06:25:18'),
            array('id' => '11','name' => 'قسم تحضير الميلو','created_at' => '2022-09-03 06:25:33','updated_at' => '2022-09-03 06:25:33'),
            array('id' => '12','name' => 'زبون1','created_at' => '2022-09-03 06:25:33','updated_at' => '2022-09-03 06:25:33'),

            array('id' => '6','name' => 'مستودع مواد مختلفة لزوم الانتاج','created_at' => '2022-09-01 14:21:01','updated_at' => '2022-09-01 14:21:01'),
            array('id' => '7','name' => 'مستودع المواد الجاهزة','created_at' => '2022-09-01 14:21:01','updated_at' => '2022-09-01 14:21:01'),
            array('id' => '8','name' => 'مستودع مواد تعبئة وتغليف','created_at' => '2022-09-01 14:21:01','updated_at' => '2022-09-01 14:21:01'),
            array('id' => '9','name' => 'مستودع المواد الاولية','created_at' => '2022-09-01 14:21:01','updated_at' => '2022-09-01 14:21:01'),

        );

        Department::insert($departments);
    }
}
