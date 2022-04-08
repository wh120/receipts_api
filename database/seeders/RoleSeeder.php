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
            ['name'=>'مدير النظام' ,'department_id'=>null , ],
            ['name'=>'مدير قسم المواد الأولية' ,'department_id'=>1 , ],
            ['name'=>'مدير قسم المواد الجاهزة' ,'department_id'=>2,],
            ['name'=>'مدير قسم التحضير' ,'department_id'=>3, ],
            ['name'=>'مدير قسم الأنتاج' ,'department_id'=>4,],

        ];
        Role::insert($data);
    }
}
