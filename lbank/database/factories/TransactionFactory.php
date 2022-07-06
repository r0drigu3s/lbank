<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
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
			'account_id' => $this->faker->numberBetween(1, 10),
			'type' => $this->faker->randomElement(['credit', 'debit']),
			'value' => $this->faker->randomFloat(2, 0, 100),
		];
	}
}
