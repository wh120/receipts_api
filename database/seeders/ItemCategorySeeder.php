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
            ['name'=>'الشراب' ],
            ['name'=>'المنكهات' ],
            ['name'=>'الملحقات' ],
            ['name'=>'مواد التغليف' ],

        ];
        ItemCategory::insert($data);
    }
}
