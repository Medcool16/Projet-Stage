<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cin' => $this->faker->randomNumber(5, true),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'license' =>$this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'adress' =>$this->faker->address(),
            'phone' =>$this->faker->phoneNumber(),
            'email' =>$this->faker->safeEmail()
        ];
    }
}