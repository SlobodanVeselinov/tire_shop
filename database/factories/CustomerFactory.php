<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'          => $this->faker->name(),
            'date_of_birth' => $this->faker->date(),
            'adress'        => $this->faker->streetAddress(),
            'city'          => $this->faker->city(),
            'country'       => $this->faker->country(),
            'email'         => $this->faker->safeEmail(),
            'phone'         => $this->faker->phoneNumber(),
        ];
    }
}
