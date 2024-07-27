<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductComment>
 */
class ProductCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment'=>$this->faker->text(200),
          'userId'=>User::all()->random()->id,
            'productId'=>Product::all()->random()->id,
            'created_at'=>$this->faker->dateTime,
            'updated_at'=>$this->faker->dateTime
            
            //
        ];
    }
}
