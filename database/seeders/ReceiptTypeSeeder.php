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

            ['name'=>'input' , 'value' =>'input' ],
            ['name'=>'output' , 'value' =>'output' ],
            ['name'=>'sale' , 'value' =>'output' ],
            ['name'=>'purchase' , 'value' =>'input'],

            ['name'=>'request' , 'value' =>'request' ],
            //...
        ];
        ReceiptType::insert($data);
    }
}
