<?php

namespace Database\Factories;

use App\Models\Jet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Jet>
 */
class JetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(),
            'model' => $this->faker->word(),
            'capacity' => $this->faker->numberBetween(4, 50),
            'hourly_rate' => $this->faker->randomFloat(2, 1000, 10000),
        ];
    }
}
