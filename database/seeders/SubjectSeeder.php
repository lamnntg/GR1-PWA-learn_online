<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d = [

            [
                'name' => 'Tiếng Việt',
            ],

            [
                'name' => 'Toán',
            ],

            [
                'name' => 'Tiếng Anh',
            ],

            [
                'name' => 'Khoa Học',
            ],

            [
                'name' => 'Tin Học',
            ],
        ];
        DB::table('subjects')->insert($d);
    }
}
