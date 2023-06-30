<?php

namespace Database\Factories;

use Faker\Provider\Fakecar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new Fakecar($this->faker));
        return [
            'matricule' => $this->faker->vehicleRegistration,
            'gear_box' => $this->faker->vehicleGearBoxType,
            'id_model' => $this->faker->randomDigit(),
            'id_marque' => $this->faker->randomDigit(),
            'id_carburant' => $this->faker->randomDigit(),
            'color' => $this->faker->colorName(),
            'price' => $this->faker->randomFloat(2,100,1000),
            'puissance' => $this->faker->randomDigit(),
            'image' => $this->faker->image(null, 640, 480)
            
        ];
    }
}
