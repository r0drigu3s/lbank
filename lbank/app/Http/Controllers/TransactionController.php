<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
	/**
	 * Lista todas as transações.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$transactions = Transaction::all();

		echo "Lista de transações:" . PHP_EOL;
		return response()->json($transactions);
	}

	/**
	 * Leva para a rota de criação de transação.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return response()->json(['message' => 'Criar transação']);
	}

	/**
	 * Salva uma nova transação.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request, Transaction $transaction)
	{
		$transaction = new Transaction();
		$transaction->name = $request->name;
		$transaction->number_account = $request->number_account;
		$transaction->type = $request->type; // 'credit' or 'debit'
		$transaction->amount = $request->amount;
		$transaction->save();

		echo "Transação efetuada com sucesso!" . PHP_EOL;
		return response()->json($transaction);
	}

	/**
	 * Lista uma transação específica.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$transaction = Transaction::findOrFail($id);

		echo "Transação encontrada:" . PHP_EOL;
		return response()->json($transaction);
	}

	/**
	 * Leva para a rota de edição de transação.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		return response()->json(['message' => 'Editar transação']);
	}

	/**
	 * Atualiza uma transação específica.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$transaction = Transaction::findOrFail($id);
		$transaction->name = $request->name;
		$transaction->number_account = $request->number_account;
		$transaction->type = $request->type; // 'credit' or 'debit'
		$transaction->amount = $request->amount;
		$transaction->save();

		echo "Transação atualizada com sucesso!" . PHP_EOL;
		return response()->json($transaction);
	}

	/**
	 * Deleta uma transação específica.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$transaction = Transaction::findOrFail($id);
		$transaction->delete();

		echo "Transação excluída com sucesso!" . PHP_EOL;
		return response()->json($transaction);
	}
}
