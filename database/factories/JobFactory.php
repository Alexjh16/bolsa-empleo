<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $fakeSalary = [
            "$100 USDT",
            "$250 USDT",
            "$500 USDT",
            "$700 USDT",
            "$1200 USDT",
            "$1500 USDT",
            "$1800 USDT",
            "$2000 USDT",
            "$2200 USDT",
            "$2500 USDT",
            "$3000 USDT",
            "$3500 USDT",
            "$4000 USDT",
            "$4500 USDT",
            "$5000 USDT"
        ];
        return [
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(),
            'salary' => $fakeSalary[array_rand($fakeSalary)],

        ];
    }
}
