<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
               'name'=>'Admin',
               'email'=>'admin@admin.com',
                'role'=>'Admin',
                'phone'=>'60273567',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Societe 1',
               'email'=>'societe1@gmail.com',
                'role'=>'Societe',
                'phone'=>'70273567',
               'password'=> bcrypt('07070707'),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
