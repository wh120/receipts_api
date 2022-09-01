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




            ['name'=>'قسم التحضير' ],
            ['name'=>'قسم الأنتاج' ],
            ['name'=>'قسم المشتريات' ],
            ['name'=>'قسم التجميع' ,  ],
            ['name'=>'قسم الإتلاف' ,  ],


            //...
        ];
        Department::insert($data);
    }
}
