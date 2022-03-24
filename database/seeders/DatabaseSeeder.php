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
         \App\Models\User::factory(10)->create();
        \App\Models\User::insert(
            [
                'name' => 'admin',
                'email' => 'admin',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

            ]
        );

        $this->call([
            DepartmentSeeder::class,
            RoleSeeder::class,
            ItemMainCategorySeeder::class,
            ItemCategorySeeder::class,
            ItemSeeder::class,

        ]);
    }
}
