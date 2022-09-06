<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

//        $user = User::create([
//            'name' => 'admin',
//            'email' => 'admin@qd.com',
//            'email_verified_at' => now(),
//            'password' => '120120', // password
//            'remember_token' => Str::random(10),
//        ]);
//
//        $role =Role::find(1);
//        $user->roles()->save($role);

        $users = array(
            array('id' => '1','name' => 'admin','email' => 'admin@qd.com','email_verified_at' => '2022-09-01 14:21:00','password' => '$2y$10$dseKFvTshrgwrfEu3M62w.SkM3YO4Z1nlVxSXo/FJClSXboVPy8KK','remember_token' => '9CmGP82XlR','created_at' => '2022-09-01 14:21:00','updated_at' => '2022-09-01 14:21:00'),
            array('id' => '2','name' => 'محمد الأحمد','email' => 'mhd@qd.com','email_verified_at' => '2022-09-01 14:21:00','password' => '$2y$10$qYp3WoHtF6Dv0S9KWjcfEefCU.oZtApg1nVVcRx1xcS6z1D10HrAS','remember_token' => 'QXWAu9TWQ8','created_at' => '2022-09-01 14:21:00','updated_at' => '2022-09-01 14:21:00'),
            array('id' => '6','name' => 'امين عوض','email' => 'str-a@sh-kd-service.com','email_verified_at' => NULL,'password' => '$2y$10$r1JjcXRYskpxU6cSMg6oIu/yFWs7p0XdGB/s6gWkhqWhi8cFY6tZq','remember_token' => NULL,'created_at' => '2022-09-03 06:51:18','updated_at' => '2022-09-03 06:51:18'),
            array('id' => '7','name' => 'محمد قدة','email' => 'mohamad@sh-kd-service.com','email_verified_at' => NULL,'password' => '$2y$10$SLZKjBgKBFwgSlZrBymS8u64sppIEHQAcVW9TKR/dPiX1nJRTz4Om','remember_token' => NULL,'created_at' => '2022-09-03 06:53:47','updated_at' => '2022-09-03 07:08:51')
        );
        User::insert($users);

        $role_user = array(
            array('user_id' => '1','role_id' => '1'),
            array('user_id' => '6','role_id' => '6'),
            array('user_id' => '6','role_id' => '7'),
            array('user_id' => '6','role_id' => '8'),
            array('user_id' => '6','role_id' => '9'),
            array('user_id' => '7','role_id' => '10'),
            array('user_id' => '7','role_id' => '11'),
            array('user_id' => '7','role_id' => '12')
        );
        DB::table( 'role_user' )->insert( $role_user );
    }
}
