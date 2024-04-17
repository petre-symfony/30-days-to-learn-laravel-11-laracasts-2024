<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('home');
});

Route::get('/jobs', function () {
	$jobs = Job::with('employer')->cursorPaginate(3);
	return view('jobs.index', [
		'jobs' => $jobs
	]);
});

Route::get('/jobs/create', function () {
	return view('jobs.create');
});

Route::get('/jobs/{id}', function (int $id) {

	$job = Job::find($id);

	return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function (){
	dd(request()->all());
});

Route::get('/contact', function () {
	return view('contact');
});
