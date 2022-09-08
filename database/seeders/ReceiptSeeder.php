<?php

namespace Database\Seeders;

use App\Models\Receipt;
use Illuminate\Database\Seeder;

class ReceiptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rec = new Receipt();
        $rec->receipt_number = '123456';
        $rec->created_by_user_id = 1;
        $rec->accepted_by_user_id = 1;
        $rec->from_department_id = 3;
        $rec->to_department_id = 2;
        $rec->must_approved_by_role_id = 1;
        $rec->receipt_type_id = 3;
        $rec->description = 'لايوجد ملاحظات';
        $rec->accepted_at = now();
        $rec->transformation_id = 1;
        $rec->save();

        $rec->items()->attach([
            1 => ['value' => 3 , 'isInput' => 0],
            4 => ['value' => 1 , 'isInput' => 1]
        ]);

    }
}
