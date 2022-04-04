<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'avatar' => Str::random(10),
            'student_id' => 'AM' . rand(1000, 3000),
            'google_id' => Str::random(10),
            'classs_id' => rand(1, 2),
        ];
    }
}
