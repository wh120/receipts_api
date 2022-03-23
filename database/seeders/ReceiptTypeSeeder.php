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
            ['name'=>'purchase' ],
            ['name'=>'input' ],
            ['name'=>'output' ],
            ['name'=>'sale' ],
            //...
        ];
        ReceiptType::insert($data);
    }
}
