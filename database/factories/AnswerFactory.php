<?php

namespace Database\Factories;

use App\Models\Answer;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnswerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Answer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->uuid,
            'question_id' => $this->faker->numberBetween($min = 1, $max = 7),
            'answer' => $this->faker->realText($maxNbChars = 100),
            'media_url' => $this->faker->imageUrl(),
            'correct_flag' => $this->faker->boolean,
        ];
    }
}
