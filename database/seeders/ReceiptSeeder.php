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
        $rec->department_id = 1;
        $rec->must_approved_by_role = 1;
        $rec->receipt_type_id = 1;
        $rec->description = 'لايوجد ملاحظات';
        $rec->accepted_at = now();
        $rec->save();

    }
}
