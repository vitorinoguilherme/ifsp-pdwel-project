<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Categories;

class PublicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence, //Generates a fake sentence
            'content' => $this->faker->sentence, //generates fake 30 paragraphs
            'user_id' => User::factory(), //Generates a User from factory and extracts id
            'category_id' => Categories::factory(), //Generates a Category from factory and extracts id
        ];
    }
}
