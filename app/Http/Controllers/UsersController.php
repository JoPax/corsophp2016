<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Hash;
use App\User;

class UsersController extends Controller {
	public function index() {
		$users = User::get();
		return view('utenti.lista', ['users' => $users]);
	}

	public function show($id) {
		$user = User::find($id);
		if ($user == null) {
			echo "non trovato";
			exit();
		}
		return view('utenti.singolo', ['user' => $user]);
	}
	
	public function create() {
		return view('utenti.crea');
	}
	
	public function store(Request $request) {
		$name = $request->input('name');
		$email = $request->input('email');
		
		$query = User::where('name', '=', $name);
		$query = $query->orWhere('email', '=', $email);
		$test = $query->count();		
		if ($test != 0)
			return "USERNAME O MAIL ASSEGNATI. <a href=\"" . url('users/create') . "\">TORNA AL FORM</a>";

		$user = new User();
		$user->name = $name;
		$user->email = $email;
		$user->password = Hash::make($request->input('password'));

		$user->save();
		return redirect(url('users/create'));
	}
	
	public function edit($id) {
		$user = User::find($id);
		// $user = User::where('id', '=', $id)->first();
		// $user = User::where('name', '=', $id)->first();
		return view('utenti.edita', ['user' => $user]);
	}
	
	public function update(Request $request, $id) {
		$user = User::find($id);
		$user->name = $request->input('name');
		$user->email = $request->input('email');
		$user->save();
		return redirect(url('users/' . $user->id . '/edit'));
	}
	
	public function destroy($id) {
		$user = User::find($id);
		$user->delete();
		return redirect(url('users'));
	}
}
