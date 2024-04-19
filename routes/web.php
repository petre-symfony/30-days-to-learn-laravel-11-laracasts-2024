<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('home');
});

// index
Route::get('/jobs', function () {
	$jobs = Job::with('employer')->latest()->simplePaginate(3);
	return view('jobs.index', [
		'jobs' => $jobs
	]);
});

//form
Route::get('/jobs/create', function () {
	return view('jobs.create');
});

//show
Route::get('/jobs/{id}', function (int $id) {

	$job = Job::find($id);

	return view('jobs.show', ['job' => $job]);
});

//store
Route::post('/jobs', function (){
	request()->validate([
		'title' => ['required', 'min:3'],
		'salary' => ['required']
	]);

	Job::create([
		'title' => request('title'),
		'salary' => request('salary'),
		'employer_id' => 1
	]);

	return redirect('/jobs');
});

//sdit
Route::get('/jobs/{id}/edit', function (int $id) {

	$job = Job::find($id);

	return view('jobs.edit', ['job' => $job]);
});

//update
Route::patch('/jobs/{id}', function (int $id) {
	//validate
	//authorize (on hold...)
	//update the job
	//persist
	//redirect to the job page
});

//destroy
Route::delete('/jobs/{id}', function (int $id) {

});

Route::get('/contact', function () {
	return view('contact');
});
