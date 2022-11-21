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
	 */
	public function definition(): array
	{
		return [
			'name'             => $this->faker->productName,
			'price'            => $this->faker->numberBetween(100, 200),
			'SQ'               => $this->faker->unique()->SQ,
			'colors'           => $this->faker->colorName,
		];
	}
}
