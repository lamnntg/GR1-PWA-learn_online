<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionCategorySeeder extends Seeder
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
                'subject_id' => '1',
                'name' => 'Tiếng việt lớp 3',
            ],
            [
                'subject_id' => '1',
                'name' => 'Tiếng việt lớp 4',
            ],
            [
                'subject_id' => '1',
                'name' => 'Tiếng việt lớp 5',
            ],
            [
                'subject_id' => '2',
                'name' => 'Toán lớp 3',
            ],
            [
                'subject_id' => '2',
                'name' => 'Toán lớp 4',
            ],
            [
                'subject_id' => '2',
                'name' => 'Toán lớp 5',
            ],
            [
                'subject_id' => '3',
                'name' => 'Tiếng Anh lớp 1',
            ],
            [
                'subject_id' => '3',
                'name' => 'Tiếng Anh lớp 1',
            ],
            [
                'subject_id' => '3',
                'name' => 'Tiếng Anh lớp 1',
            ],
        ];
        DB::table('question_categories')->insert($data);
    }
}
