<?php

namespace Database\Factories;

use Dotenv\Util\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(5);

        return [
            "featured" => $this->faker->boolean,
            "title" => $title,
            "url" => \Illuminate\Support\Str::slug($title),
            "imageUrl" => \Illuminate\Support\Str::slug($title),
            "newsSite" => $this->faker->sentence(2),
            "summary" => $this->faker->text(191),
            "published_at" => $this->faker->dateTime()
        ];
    }
}
