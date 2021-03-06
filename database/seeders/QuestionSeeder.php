<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Question::factory(2000)->create()->each(function( $question) {
            $anwser = \App\Models\Answer::factory(4)->create([
                'question_id' => $question->id,
            ]);
        });
    }
}
