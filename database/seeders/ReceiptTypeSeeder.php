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

            ['name'=>'input' ],
            ['name'=>'output' ],
            ['name'=>'sale' ],
            ['name'=>'purchase' ]
            //...
        ];
        ReceiptType::insert($data);
    }
}
