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
            'id_model' => $this->faker->numberBetween(1,6),
            'id_marque' => $this->faker->numberBetween(1,9),
            'id_carburant' => $this->faker->numberBetween(2,5),
            'nbr_person' => $this->faker->numberBetween(2,9),
            'kilometrage' => $this->faker->randomElement(['unlimited','limited']),
            'status' => $this->faker->randomElement(['available','reserved']),
            'type' => $this->faker->randomElement(['Compact','Sport','Economy','SUVs','Van','Minivan','Covertible']),
            'color' => $this->faker->colorName(),
            'price' => $this->faker->randomFloat(2,100,1000),
            'puissance' => $this->faker->numberBetween(90,400),
            'image' => $this->faker->imageUrl($width = 640, $height = 480, 'cars'),
            
        ];
    }
}
