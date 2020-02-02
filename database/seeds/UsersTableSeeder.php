<?php

use Illuminate\Database\Seeder;
use App\User;
use App\UserPassword;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdministratorUser = User::create([
            'first_name' => 'Super',
            'last_name' => 'Administrator',
            'email' => 'super@administrator.com',
            'phone_no' => '9816491822',
            'address' => 'Devdaha-10, Charange',
            'gender' => 'male',
            'password' => bcrypt('tfg@project33100%'),
            'status' => 1
        ]);
        $superAdministratorUser->assignRole('Super Administrator');

        $administratorUser = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Myself',
            'email' => 'admin@admin.com',
            'phone_no' => '9867226239',
            'address' => 'Devdaha-10, Charange',
            'gender' => 'male',
            'password' => bcrypt('admin123'),
            'status' => 1
        ]);
        $administratorUser->assignRole('Administrator');
    }
}
