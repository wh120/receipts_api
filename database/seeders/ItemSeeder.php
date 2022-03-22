<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\ItemUnit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Item();
        $item->name = 'شراب برتقال';
        $item->code = '132';
        $item->description = '';
        $item->item_category_id = 1;
        $item->unit = 'ظرف';
        $item->save();


        $item->units()->saveMany([
            new ItemUnit(['name' => 'علبة' , 'conversion_factor'=>12]),
            new ItemUnit(['name' => 'طرد' , 'conversion_factor'=>100]),
        ]);


    }
}
