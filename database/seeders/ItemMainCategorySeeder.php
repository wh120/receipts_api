<?php

namespace Database\Seeders;

use App\Models\ItemMainCategory;
use Illuminate\Database\Seeder;

class ItemMainCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'المواد الجاهزة' , 'code'=>'1'  ,'department_id'=>3],
            ['name'=>'المنكهات الصناعية والمواد الأولية' , 'code'=>'2'  ,'department_id'=>1 ],
            ['name'=>'مواد الرولات' , 'code'=>'3'  ,'department_id'=>2],
            ['name'=>'الصناديق الخارجية' , 'code'=>'4'  ,'department_id'=>4],
            ['name'=>'العلب والكليشات والأكياس', 'code'=>'5'  ,'department_id'=>2],
            ['name'=>'مواد مختلفة لزوم الانتاج', 'code'=>'6'  ,'department_id'=>null]

        ];
        ItemMainCategory::insert($data);
    }
}
