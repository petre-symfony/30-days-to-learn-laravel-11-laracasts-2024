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

Route::get('/posts/{post:slug}', function () {});

//show
Route::get('/jobs/{job}', function (Job $job) {
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

	$job = Job::findOrFail($id);

	return view('jobs.edit', ['job' => $job]);
});

//update
Route::patch('/jobs/{id}', function (int $id) {
	request()->validate([
		'title' => ['required', 'min:3'],
		'salary' => ['required']
	]);
	//authorize (on hold...)

	$job = Job::findOrFail($id);

	$job->update([
		'title' => request('title'),
		'salary' => request('salary')
	]);

	return redirect('/jobs/' . $job->id);
});

//destroy
Route::delete('/jobs/{id}', function (int $id) {
	//authorize(on hold...)

	Job::findOrFail($id)->delete();

	return redirect('/jobs');
});

Route::get('/contact', function () {
	return view('contact');
});
