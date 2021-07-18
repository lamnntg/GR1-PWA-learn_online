<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('123456'); // Default user password

        $d = [

            [
                'name' => 'Admin ',
                'email' => 'admin@admin.com',
                'password' => $password,
                'remember_token' => Str::random(10),
            ],
        ];
        DB::table('users')->insert($d);
    }
}
