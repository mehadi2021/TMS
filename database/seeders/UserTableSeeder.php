<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin data insert through seeder
        User::create(
            [
                'name'=>'mehadi',
                'email'=>'mr@gmail.com',
                'password'=>bcrypt('12'),
                'NID'=>'2345679213457',
                'Address'=>'Dhaka',
                'Gender'=>'male',
                'DOB'=>'10-10-1998',
                'mobile'=>'01714797978',
                'role'=>'admin',
                'bio' => 'Admin of Tour planning management system.',
                'image'=>'admin.jpg'


            ]
        );
    }
}