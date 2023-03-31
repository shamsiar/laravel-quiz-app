<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\Test;
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
    public function definition(): array
    {
        return [
            'test_id'   => Test::get()->random()->id,
            'question'  => $this->faker->sentence,
            'option_1'  => $this->faker->sentence,
            'option_2'  => $this->faker->sentence,
            'option_3'  => $this->faker->sentence,
            'option_4'  => $this->faker->sentence,
            'answer'    => $this->faker->randomElement([1, 2, 3, 4]),
        ];
    }
}
