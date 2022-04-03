<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sale_id' => $this->faker->numberBetween(1, 500),
            'amount'  => $this->faker->numberBetween(1000, 2000),
            'description' => $this->faker->sentence(),
        ];
    }
}
