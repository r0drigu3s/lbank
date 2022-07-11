<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
	/**
	 * Lista todos as contas.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$accounts = Account::all();

		echo "Lista de contas:" . PHP_EOL;
		return response()->json($accounts);
	}

	/**
	 * Leva para a rota de criação de conta.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return response()->json(['message' => 'Criar conta']);
	}

	/**
	 * Salva uma nova conta.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request, Account $account)
	{
		$account = new Account();
		$account->name = $request->name;
		$account->number_account = $request->number_account;
		$account->balance = $request->balance;
		$account->save();

		echo "Conta criada com sucesso!" . PHP_EOL;
		return response()->json($account);
	}

	/**
	 * Lista uma conta específica.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$account = Account::findOrFail($id);

		echo "Conta encontrada com sucesso!" . PHP_EOL;
		return response()->json($account);
	}

	/**
	 * Leva para a rota de edição de conta.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		return response()->json(['message' => 'Editar conta']);
	}

	/**
	 * Atualiza uma conta específica.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$account = Account::findOrFail($id);
		$account->name = $request->name;
		$account->number_account = $request->number_account;
		$account->balance = $request->balance;
		$account->save();

		echo "Conta alterada com sucesso!" . PHP_EOL;
		return response()->json($account);
	}

	/**
	 * Deleta uma conta específica.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$account = Account::findOrFail($id);
		$account->delete();

		echo "Conta deletada com sucesso!" . PHP_EOL;
		return response()->json($account);
	}
}
