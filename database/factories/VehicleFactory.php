<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "car_name"=>fake()->name(),
            "car_review"=>fake()->numberBetween(0,5),
            "car_type"=>fake()->numberBetween(1,7),
            "car_image"=>fake()->numberBetween(101,120),
            "car_passenger"=>fake()->numberBetween(3,52),
            "car_gate"=>fake()->numberBetween(1,5),
            "car_rent"=>fake()->numberBetween(50,500)
        ];
    }
}
