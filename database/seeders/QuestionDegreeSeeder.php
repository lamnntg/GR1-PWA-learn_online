<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionDegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Cực dễ',
            ],
            [
                'name' => 'Dễ',
            ],
            [
                'name' => 'Vừa',
            ],
            [
                'name' => 'Khó',
            ],
            [
                'name' => 'Cực khó',
            ],
        ];
        DB::table('question_degrees')->insert($data);
    }
}
