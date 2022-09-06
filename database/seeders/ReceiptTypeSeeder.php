<?php

namespace Database\Seeders;

use App\Models\ReceiptType;
use Illuminate\Database\Seeder;

class ReceiptTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [


            ['name'=>'output' , 'value' =>'output' ],
            ['name'=>'request' , 'value' =>'request' ],
            ['name'=>'transformation' , 'value' =>'transformation' ],
            ['name'=>'input' , 'value' =>'input' ],
            //...
        ];
        ReceiptType::insert($data);
    }
}
