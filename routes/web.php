<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
			'greeting' => 'Helo',
			'name' => 'Lary Robot'
		]);
});

Route::get('/about', function () {
	return view('about');
});

Route::get('/contact', function () {
	return view('contact');
});
