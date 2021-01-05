<?php

namespace Database\Factories;

use App\Models\Kwote;
use Illuminate\Database\Eloquent\Factories\Factory;

class KwoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kwote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quote' => $this->faker->sentence(20, true),
            'author' => $this->faker->unique()->name(),
            'category' => $this->faker->word(),
            'likes' => $this->faker->randomNumber(),
        ];
    }
}
