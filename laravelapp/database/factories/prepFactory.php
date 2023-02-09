<?php

namespace Database\Factories;
use App\Models\prep;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\prep>
 */
class prepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'имя_преподавателя' => fake()->name(),
            'возраст' => mt_rand(16,25),
            'дата_рождения' => fake()->unique()->dateTimeBetween($startDate = '1990-01-01', $endDate = '2000-01-01')->format('Y-m-d'), ];
    }
}
