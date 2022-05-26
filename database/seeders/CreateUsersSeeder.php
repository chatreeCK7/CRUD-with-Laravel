<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
                'username' => 'Admin',
                'email' => 'admin@admin.com',
                'is_admin' => '1',
                'password' => bcrypt('admin')
            ],
            [
                'username' => 'User',
                'email' => 'user@user.com',
                'is_admin' => '0',
                'password' => bcrypt('user')
            ]
        ];
        
        foreach($user as $key => $value){
            User::create($value);
        }
        //
    }
}
