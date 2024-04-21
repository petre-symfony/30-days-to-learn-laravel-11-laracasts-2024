<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller {
	public function create() {
		return view('auth.register');
	}

	public function store() {
		//validate
		request()->validate([
			'first_name' => ['required'],
			'last_name' => ['required'],
			'email' => ['required', 'email', 'max:254', 'confirmed'], //email_confirmation
			'password' => ['required', Password::min(6), 'confirmed'] //password_confirmation
		]);
		//create the user
		//log in
		//redirect somewhere
	}
}
