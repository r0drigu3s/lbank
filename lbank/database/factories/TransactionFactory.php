<?php

namespace Database\Factories;

use App\Models\Account;
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
		$account = Account::all()->pluck('id')->toArray();

		return [
			'account_id' => $this->faker->randomElement($account),
			'type' => $this->faker->randomElement(['Crédito', 'Débito']),
			'amount' => $this->faker->randomFloat(2, 0, 100),
		];
	}
}
