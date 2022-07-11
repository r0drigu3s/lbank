<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	use HasFactory;

	protected $table = 'transactions';

	protected $fillable = [
		'name',
		'number_account',
		'amount',
		'type', // 'credit' or 'debit'
	];

	public function accounts()
	{
		return $this->belongsToMany(Account::class);
	}
}
