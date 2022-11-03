<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array(
            array('id' => '1','name' => 'مدير النظام','code' => 'admin','department_id' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','name' => 'مدير البيانات','code' => 'data_admin','department_id' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '6','name' => 'مدير مستودع مواد مختلفة لزوم لانتاج','code' => 'v8gB9','department_id' => '6','created_at' => '2022-09-03 06:40:05','updated_at' => '2022-09-03 06:40:05'),
            array('id' => '7','name' => 'مدير مستودع المواد الجاهزة','code' => 'Aq6Gg','department_id' => '7','created_at' => '2022-09-03 06:43:00','updated_at' => '2022-09-03 06:43:00'),
            array('id' => '8','name' => 'مدير مستودع تعبئة وتغليف','code' => 'lcMHX','department_id' => '8','created_at' => '2022-09-03 06:43:25','updated_at' => '2022-09-03 06:43:25'),
            array('id' => '9','name' => 'مدير مستودع المواد الأولية','code' => 'WSTJU','department_id' => '9','created_at' => '2022-09-03 06:44:16','updated_at' => '2022-09-03 06:44:16'),
            array('id' => '10','name' => 'مدير قسم تحضير الشراب','code' => 'TCUy2','department_id' => '10','created_at' => '2022-09-03 06:46:53','updated_at' => '2022-09-03 06:46:53'),
            array('id' => '11','name' => 'مدير قسم تحضير الميلو','code' => 'PNw29','department_id' => '11','created_at' => '2022-09-03 06:47:08','updated_at' => '2022-09-03 06:47:08'),
            array('id' => '12','name' => 'مدير قسم لانتاج','code' => '2vxeE','department_id' => '2','created_at' => '2022-09-03 06:47:50','updated_at' => '2022-09-03 06:47:50'),
            array('id' => '13','name' => 'مدير قسم المشتريات','code' => 'ZE1nF','department_id' => '3','created_at' => '2022-09-03 06:48:08','updated_at' => '2022-09-03 06:48:08'),
            array('id' => '14','name' => 'مدير قسم لإتلاف','code' => 'E1hMP','department_id' => '5','created_at' => '2022-09-03 06:48:34','updated_at' => '2022-09-03 06:48:34')
        );

        Role::insert($roles);
    }
}
