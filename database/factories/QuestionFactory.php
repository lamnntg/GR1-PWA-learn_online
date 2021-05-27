<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->uuid,
            'question_category_id' => $this->faker->numberBetween($min = 1, $max = 7),
            'question_degree_id' => $this->faker->numberBetween($min = 1, $max = 5),
            'question' => $this->faker->realText($maxNbChars = 100),
            'answer_type' => $this->faker->numberBetween($min = 1, $max = 3),
            'check_point_flg' => $this->faker->boolean,
            'interview_flg' => $this->faker->boolean,
        ];
    }
}
