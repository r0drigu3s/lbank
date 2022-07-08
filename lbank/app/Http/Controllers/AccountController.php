<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
	// retornar todas as contas em JSON
	public function index()
	{
		$accounts = \App\Models\Account::all();
		return response()->json($accounts);
	}

	public function create(Request $request, \App\Models\Account $account)
	{
		// cria uma nova conta para o usuário
		$account = new \App\Models\Account();
		$account->name = $request->name;
		$account->number_account = $request->number_account;
		$account->balance = $request->balance;
		$account->save();

		echo "Conta criada com sucesso!" . PHP_EOL;
		return response()->json($account);
	}
}
