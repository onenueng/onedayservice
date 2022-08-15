<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name(),
            'gender' => random_int(1,2),
            'dob' => $this->faker->dateTimeBetween('-18 years', '1 day'),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
