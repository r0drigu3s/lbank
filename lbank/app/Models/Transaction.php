<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	use HasFactory;

	protected $fillable = [
		'id',
		'user_id',
		'account_id',
		'amount',
		'description',
		'type',
	];

	public function account()
	{
		return $this->belongsToMany(Account::class);
	}
}
