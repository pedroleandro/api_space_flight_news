<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "article" => $this->faker->numberBetween(1, 30),
            "provider" => $this->faker->sentence(1),
        ];
    }
}
