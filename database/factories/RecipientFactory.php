<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipient>
 */
class RecipientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "street_1" => fake()->streetAddress(),
            "street_2" => fake()->secondaryAddress(),
            "city" => fake()->city(),
            "state" => fake()->state(),
            "zip_code" => fake()->postcode(),        ];
    }
}
