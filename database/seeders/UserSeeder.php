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

        $role =Role::find(1);
        $user->roles()->save($role);

        $user = User::create([
            'name' => 'محمد الأحمد',
            'email' => 'mhd@qd.com',
            'email_verified_at' => now(),
            'password' => '120120', // password
            'remember_token' => Str::random(10),
        ]);

        $role =Role::find(2);
        $user->roles()->save($role);

        $user = User::create([
            'name' => 'أحمد الأحمد',
            'email' => 'ahmad@qd.com',
            'email_verified_at' => now(),
            'password' => '120120', // password
            'remember_token' => Str::random(10),
        ]);

        $role =Role::find(3);
        $user->roles()->save($role);

        $user = User::create([
            'name' => 'حمدي الأحمد',
            'email' => 'hamdi@qd.com',
            'email_verified_at' => now(),
            'password' => '120120', // password
            'remember_token' => Str::random(10),
        ]);

        $role =Role::find(4);
        $user->roles()->save($role);


        $user = User::create([
            'name' => 'حمد الأحمد',
            'email' => 'hamad@qd.com',
            'email_verified_at' => now(),
            'password' => '120120', // password
            'remember_token' => Str::random(10),
        ]);

        $role =Role::find(5);
        $user->roles()->save($role);
    }
}
