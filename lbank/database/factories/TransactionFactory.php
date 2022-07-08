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
			'name' => $this->faker->name(),
			'number_account' => $this->faker->unique(true)->numberBetween(1, 100),
			'type' => $this->faker->randomElement(['credit', 'debit']),
			'amount' => $this->faker->randomFloat(2, 0, 100),
		];
	}
}
