<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		return [
			'user_id' => $this->faker->numberBetween(1, 10),
			'number_account' => $this->faker->unique()->numberBetween(1000000, 9999999),
			'balance' => $this->faker->randomFloat(2, 0, 100),
		];
	}
}
