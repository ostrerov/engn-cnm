<?php

namespace Database\Factories;

use App\Models\Operators;
use Illuminate\Database\Eloquent\Factories\Factory;

class OperatorsFactory extends Factory
{
    protected $model = Operators::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
