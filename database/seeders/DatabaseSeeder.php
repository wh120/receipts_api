<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //\App\Models\User::factory(10)->create();


        $this->call([

            DepartmentSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,

//            ItemMainCategorySeeder::class,
//            ItemCategorySeeder::class,
            ItemSeeder::class,
//
            ReceiptTypeSeeder::class,
            ReceiptSeeder::class,
//
            TransformationSeeder::class,

        ]);
    }
}
