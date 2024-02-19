<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Gold', 'Platinum', 'Premium', 'Mini']),
            'tenure' => 50,
            'bonus' => 10
        ];
    }

    public function demo()
    {
        return $this->state(fn (array $attr) => ['demo' => true]);
    }
}
