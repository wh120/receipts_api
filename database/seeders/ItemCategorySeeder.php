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

        ];
        ItemCategory::insert($data);
    }
}
