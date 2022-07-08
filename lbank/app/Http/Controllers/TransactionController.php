<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
	/**
	 * retorna todas as transações em JSON
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$transactions = \App\Models\Transaction::all();
		return response()->json($transactions);
	}

	public function operation(Request $request, \App\Models\Transaction $transaction)
	{
		// cria uma nova transação para o usuário
		$transaction = new \App\Models\Transaction();
		$transaction->name = $request->name;
		$transaction->number_account = $request->number_account;
		$transaction->type = $request->type; // 'credit' or 'debit'
		$transaction->amount = $request->amount;
		$transaction->save();

		echo "Transação efetuada com sucesso!" . PHP_EOL;
		return response()->json($transaction);
	}
}
