<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
use App\Models\Oders;
use App\Models\Product;
class OdersDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'oder_id'=>Oders::all()->random()->oder_id,
            'product_id'=>Product::all()->random()->product_id,
            'price'=>$this->faker->randomFloat(2,10),
            'created_at'=>$this->faker->dateTime,
            'updated_at'=>$this->faker->dateTime

            //
        ];
    }
}
