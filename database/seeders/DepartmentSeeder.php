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
        $data = [
            ['name'=>'قسم المواد الأولية' ],
            ['name'=>'قسم المواد الجاهزة' ],
            ['name'=>'قسم التحضير' ],
            ['name'=>'قسم الأنتاج' ],

            //...
        ];
        Department::insert($data);
    }
}
