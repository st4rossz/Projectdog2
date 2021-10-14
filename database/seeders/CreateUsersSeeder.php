<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin',
                'email'=>'kanit.je@rmuti.ac.th',
                'is_admin'=>'1',
                'password'=>bcrypt('1234'),
                'address'=>'ร้าน Good Dog Home',
                'tel'=>'0622452015'
            ],
            [
                'name'=>'User',
                'email'=>'user@user.com',
                'is_admin'=>'0',
                'password'=>bcrypt('1234'),
                'address'=>'บ้านฉัน',
                'tel'=>'0812601076'
            ]
            ];
            foreach($user as $key => $value){
                User::create($value);
            }
    }
}
