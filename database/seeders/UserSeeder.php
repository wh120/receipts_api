<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@qd.com',
            'email_verified_at' => now(),
            'password' => '120120', // password
            'remember_token' => Str::random(10),
        ]);

        $role =Role::first();
        $user->roles()->save($role);

        $user = User::create([
            'name' => 'محمد',
            'email' => 'mhd@qd.com',
            'email_verified_at' => now(),
            'password' => '120120', // password
            'remember_token' => Str::random(10),
        ]);

        $role =Role::find(2);
        $user->roles()->save($role);
    }
}
