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
        $data = [
            ['name'=>'مدير النظام' ,'department_id'=>null , 'guard_name'=>'api'],
            ['name'=>'مدير قسم المواد الأولية' ,'department_id'=>1 , 'guard_name'=>'api'],
            ['name'=>'مدير قسم المواد الجاهزة' ,'department_id'=>2, 'guard_name'=>'api' ],
            ['name'=>'مدير قسم التحضير' ,'department_id'=>3, 'guard_name'=>'api'],
            ['name'=>'مدير قسم الأنتاج' ,'department_id'=>4, 'guard_name'=>'api'],

        ];
        Role::insert($data);
    }
}
