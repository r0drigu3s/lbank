<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
	// retorna todos os usuários em JSON
	public function index()
	{
		$users = \App\Models\User::all();
		return response()->json($users);
	}

	public function create(Request $request, \App\Models\User $user)
	{
		// cria um novo usuário
		$user = new \App\Models\User();
		$user->name = $request->name;
		$user->age = $request->age;
		$user->email = $request->email;
		$user->save();

		echo "Usuário criado com sucesso!" . PHP_EOL;
		return response()->json($user);
	}
}
