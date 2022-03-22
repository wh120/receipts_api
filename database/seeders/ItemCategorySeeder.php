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
            ['name'=>'الشراب' , 'code'=>'001' ],
            ['name'=>'المنكهات' , 'code'=>'002'],
            ['name'=>'الملحقات' , 'code'=>'003'],
            ['name'=>'مواد التغليف', 'code'=>'004' ],

        ];
        ItemCategory::insert($data);
    }
}
