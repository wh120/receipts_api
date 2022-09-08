<?php

namespace Database\Seeders;

use App\Models\Transformation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $transformations = array(
            array('id' => '1','name' => 'عملية خلط شراب البرتقال','description' => NULL,'created_at' => '2022-09-01 14:21:01','updated_at' => '2022-09-01 14:21:01'),
            array('id' => '2','name' => 'الفائز ظرف','description' => NULL,'created_at' => '2022-09-03 09:02:20','updated_at' => '2022-09-03 09:02:20'),
            array('id' => '3','name' => 'علبة ميلو الفائز','description' => NULL,'created_at' => '2022-09-03 09:07:40','updated_at' => '2022-09-03 09:07:40')
        );

        DB::table( 'transformations' )->insert( $transformations );


        $item_transformation = array(
            array('id' => '1','transformation_id' => '1','item_id' => '1','value' => '1','isInput' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','transformation_id' => '1','item_id' => '4','value' => '1','isInput' => '0','created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','transformation_id' => '2','item_id' => '158','value' => '392','isInput' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '5','transformation_id' => '2','item_id' => '329','value' => '30','isInput' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '6','transformation_id' => '2','item_id' => '224','value' => '1175','isInput' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '7','transformation_id' => '2','item_id' => '338','value' => '1500','isInput' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '8','transformation_id' => '2','item_id' => '13','value' => '96000','isInput' => '0','created_at' => NULL,'updated_at' => NULL),
            array('id' => '9','transformation_id' => '3','item_id' => '222','value' => '1','isInput' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '10','transformation_id' => '3','item_id' => '329','value' => '1','isInput' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '11','transformation_id' => '3','item_id' => '158','value' => '1','isInput' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '12','transformation_id' => '3','item_id' => '338','value' => '2','isInput' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '13','transformation_id' => '3','item_id' => '13','value' => '96','isInput' => '0','created_at' => NULL,'updated_at' => NULL)
        );
        DB::table( 'item_transformation' )->insert( $item_transformation );


    }
}
