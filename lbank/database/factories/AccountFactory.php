<?php

namespace Database\Factories;

use App\Models\User;
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
		$user = User::all()->pluck('id')->toArray();

		return [
			'user_id' => $this->faker->randomElement($user),
			'number_account' => $this->faker->unique(true)->numberBetween(1, 100),
			'type_of_account' => $this->faker->randomElement(['Corrente', 'Poupança']),
			'balance' => $this->faker->randomFloat(2, 0, 100),
		];
	}
}
