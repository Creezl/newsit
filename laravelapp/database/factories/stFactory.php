<?php
namespace Database\Factories;
use App\Models\st;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
class stFactory extends Factory
{/** * Define the model's default state. *
  * @return array<string, mixed> */
public function definition(){
    return [
    'имя' => fake()->name(),
    'возраст' => mt_rand(16,25),
    'дата_рождения' => fake()->unique()->dateTimeBetween($startDate = '1990-01-01', $endDate = '2000-01-01')->format('Y-m-d'), ];}}
