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
            ['name'=>'المواد الجاهزة' , 'code'=>'1' ],
            ['name'=>'المنكهات الصناعية والمواد الأولية' , 'code'=>'2' ],
            ['name'=>'مواد الرولات' , 'code'=>'3'],
            ['name'=>'الصناديق الخارجية' , 'code'=>'4'],
            ['name'=>'العلب والكليشات والأكياس', 'code'=>'5' ],
            ['name'=>'مواد مختلفة لزوم الانتاج', 'code'=>'6' ]

        ];
        ItemMainCategory::insert($data);
    }
}
