<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$users = \App\Models\User::all();
		return view('user.index', compact('users')); // compact('users') é o equivalente a ['users' => $users]
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('user.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$user = new \App\Models\User();
		$user->name = $request->name;
		$user->email = $request->email;
		$user->save();
		return redirect()->route('user.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$user = \App\Models\User::find($id);
		return view('user.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$user = \App\Models\User::find($id);
		return view('user.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 * @throws \Illuminate\Auth\Access\AuthorizationException
	 */
	public function update(Request $request, $id)
	{
		$user = \App\Models\User::find($id);
		$this->authorize('update', $user); // Verifica se o usuário tem permissão para editar o usuário
		$user->name = $request->name;
		$user->email = $request->email;
		$user->save();
		return redirect()->route('user.index');
	}
}
