<?php

namespace Database\Seeders;

use App\Models\Transformation;
use Illuminate\Database\Seeder;

class TransformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tr = new Transformation();
        $tr->name = "عملية خلط شراب البرتقال";
        $tr->save();

        $tr->items()->attach(
            [
                1 => ['value' => 3 ,'isInput'=>true],
                2 => ['value' => 3 ,'isInput'=>true],
                4 => ['value' => 1 ,'isInput'=>false],
            ]);

    }
}
