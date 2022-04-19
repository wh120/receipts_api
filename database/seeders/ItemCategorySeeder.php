<?php

namespace Database\Seeders;

use App\Models\ItemCategory;
use Illuminate\Database\Seeder;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'الشراب' , 'code'=>'100', "item_main_category_id"=>1 ],
            ['name'=>'الميلو' , 'code'=>'101', "item_main_category_id"=>1],
            ['name'=>'الكابتشينو' , 'code'=>'102', "item_main_category_id"=>1],
            ['name'=>'السحلب', 'code'=>'103', "item_main_category_id"=>1 ],
            ['name'=>'شوكولا', 'code'=>'104', "item_main_category_id"=>1 ],


            ['name'=>'1شوكولا', 'code'=>'1041', "item_main_category_id"=>2 ],
            ['name'=>'2شوكولا', 'code'=>'1042', "item_main_category_id"=>3 ],
            ['name'=>'3شوكولا', 'code'=>'1043', "item_main_category_id"=>4 ],
            ['name'=>'4شوكولا', 'code'=>'1044', "item_main_category_id"=>6 ],

        ];
        ItemCategory::insert($data);
    }
}
