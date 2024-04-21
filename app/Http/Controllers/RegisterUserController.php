<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller {
	public function create() {
		return view('auth.register');
	}

	public function store() {
		//validate
		$validatedAttributes = request()->validate([
			'first_name' => ['required'],
			'last_name' => ['required'],
			'email' => ['required', 'email', 'max:254'],
			'password' => ['required', Password::min(6), 'confirmed']
		]);
		dd($validatedAttributes);
		//create the user
		User::create([
			'firat_name' => request('first_name'),
			'laat_name' => request('last_name'),
			'emaiL' => request('email')
		]);
		//log in
		//redirect somewhere
	}
}
