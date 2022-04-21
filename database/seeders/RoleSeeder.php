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
            ['name'=>'مدير النظام' ,'code'=>'admin','department_id'=>null , ],
            ['name'=>'مدير قسم المواد الأولية' ,'code'=>'r1' ,'department_id'=>1 , ],
            ['name'=>'مدير قسم المواد الجاهزة' ,'code'=>'r2','department_id'=>2,],
            ['name'=>'مدير قسم التحضير' ,'code'=>'r3','department_id'=>3, ],
            ['name'=>'مدير قسم الأنتاج' ,'code'=>'r4','department_id'=>4,],

        ];
        Role::insert($data);
    }
}
