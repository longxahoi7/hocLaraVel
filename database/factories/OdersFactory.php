<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
use App\Models\User;

class OdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>User::all()->random()->user_id,
            'toTalPrice'=>$this->faker->randomFloat(2,10),
            'created_at'=>$this->faker->dateTime,
            'updated_at'=>$this->faker->dateTime

            //
        ];
    }
}
