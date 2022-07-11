<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
	use HasFactory;

	protected $table = 'accounts';

	protected $fillable = [
		'name',
		'number_account',
		'balance', // saldo em reais
	];

	public function users()
	{
		return $this->belongsTo(User::class);
	}

	public function transactions()
	{
		return $this->hasMany(Transaction::class);
	}
}
