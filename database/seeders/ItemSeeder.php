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
        $data = [
            "1000"=>
                [
                'شراب وينر ظرف 9 غ محلى' ,
                'شراب عمار ظرف 35 غ اصبع',
                'شراب عمار ظرف 35 غ مربع',
                'شراب عمار 650 غ',
                'شراب عمار 2 كغ علبة بلاستيك',
                'شراب محلى وينر دكما',
                'شراب عادي عمار دكما',
                'شراب عمار 10غ غير محلى'
                ],
            "1010"=>[
                "ميلو وينر علبة بلاستيك 200 غ",
                "ميلو وينر ظرف 25 غ",
                "ميلو الفائز علبة بلاستيك 250 غ",
                "ميلو الفائز ظرف 20غ",
                "ميلو الفائز ظرف 20 غ * 12 علبة",
                "ميلو الفائز دكما",
                "ميلو الفائز فرط",
                "ميلو الفائز 400 غ",
                "ميلو الفائز 800 غ",
                "ميلو وينر علبة بلاستيك 250 غ",
                "ميلو وينر ظرف 20 غ",
                "ميلو وينر 800غ",

            ],
            "1020"=>[
                "كابتشينو وينر علب",
                "وينر 3*1 علب",
                "وينر 3*1 مطربان"
            ],
            "1030"=>[
                "سحلب وينر"
            ],
            "1040"=>[
                "شوكولا وينر 300 غ",
                "شوكولا وينر 700 غ",
                "شوكولا وينر دكما",
            ]

        ] ;

        foreach ($data as $code => $names){
            $code_id =1;
            $category_id =1;
            foreach ($names as $name){
                $item = new Item();
                $item->name = $name;
                $item->code = $code.$code_id++;
                $item->description = $name;
                $item->item_category_id = $category_id;
                $item->unit = 'ظرف';
                $item->save();

                $item->units()->saveMany([
                    new ItemUnit(['name' => 'علبة' , 'conversion_factor'=>12]),
                    new ItemUnit(['name' => 'طرد' , 'conversion_factor'=>100]),
                ]);

            }
            $category_id++;
        }


        $item = new Item();
        $item->name = '1هوت شوكليت';
        $item->code = '1263';
        $item->description = '$name';
        $item->item_category_id = 6;
        $item->unit = 'ظرف';
        $item->save();

        $item = new Item();
        $item->name = '2هوت شوكليت';
        $item->code = '1253';
        $item->description = '$name';
        $item->item_category_id = 7;
        $item->unit = 'ظرف';
        $item->save();

        $item = new Item();
        $item->name = '3هوت شوكليت';
        $item->code = '1233';
        $item->description = '$name';
        $item->item_category_id = 8;
        $item->unit = 'ظرف';
        $item->save();

        $item = new Item();
        $item->name = '4هوت شوكلي';
        $item->code = '1234';
        $item->description = '$name';
        $item->item_category_id = 9;
        $item->unit = 'ظرف';
        $item->save();



    }
}
