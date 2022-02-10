<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'detail' => $this->faker->text(maxNbChars:30),
            'description' => $this->faker->text(maxNbChars:200),
            'brand' => $this->faker->company(),
            'price'=> $this->faker->randomDigit(),
            'shipping_cost' => $this->faker->randomDigit(),
            'image_url'=> $this->faker->imageUrl()
        ];
    }
}
