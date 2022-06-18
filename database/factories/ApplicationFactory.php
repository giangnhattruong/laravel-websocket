<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => ucfirst($this->faker->words(2, true)),
            'content' => ucfirst($this->faker->words(9, true)),
            'user_id' => $this->faker->numberBetween(1, 4),
        ];
    }
}
