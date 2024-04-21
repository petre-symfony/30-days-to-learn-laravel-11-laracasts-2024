<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterUserController extends Controller {
	public function create() {
		return view('auth.register');
	}

	public function store() {
		//validate
		request()->validate([
			'first_name' => ['required'],
			'last_name' => ['required'],
			'email' => ['required', 'email', 'max:254'],
			'password' => ['required']
		]);
		//create the user
		//log in
		//redirect somewhere
	}
}
