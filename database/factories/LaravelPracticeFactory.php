<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LaravelPractice>
 */
class LaravelPracticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->randomDigit,
            'email' => $this->faker->freeEmail,
            'address' => $this->faker->address,
            'phone_number' => $this->faker->phoneNumber,
            //
        ];
    }
}
