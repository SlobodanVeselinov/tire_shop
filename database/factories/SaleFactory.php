<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'customer_id' => $this->faker->numberBetween(1, 100),
            'product_id'  => $this->faker->numberBetween(1, 200),
            'quantity'    => $this->faker->numberBetween(2, 8),
            'total_price' => $this->faker->numberBetween(7000, 25000),
            'is_paid'     => $this->faker->randomElement([0, 1]),
            'payment_due' => $this->faker->date(),
        ];
    }
}
