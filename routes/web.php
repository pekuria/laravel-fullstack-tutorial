<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);

//Auth
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs',  'index');
//     Route::get('/jobs/create',  'create');
//     Route::get('/jobs/{job}',  'show');
//     Route::post('/jobs',  'store');
//     Route::get('/jobs/{job}/edit',  'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}',  'destroy');
// });



// Route::get('/jobs', function () {
//     $jobs = Job::with('employer')->latest()->simplePaginate(3);

//     return view('jobs.index', [
//         'jobs' => $jobs
//     ]);
// });

// Route::get('/jobs/create', function ()  {
//     return view('jobs.create');
// });

// Route::post('/jobs', function () {

//     request()->validate([
//         'title' => ['required', 'min:3'],
//         'salary' => ['required']
//     ]);

//     Job::create([
//         'title' => request('title'),
//         'salary' => request('salary'),
//         'employer_id' => 1,
//     ]);

//     return redirect('/jobs');
// });

// Route::get('/jobs/{job}', function (Job $job) {
//     // $job = Job::find($id);
//     return view('jobs.show', ['job' => $job]);
// });


// Route::get('/jobs/{job}/edit', function (Job $job) {
//     return view('jobs.edit', ['job' => $job]);
// });


// Route::patch('/jobs/{job}', function (Job $job) {
//     request()->validate([
//         'title' => ['required', 'min:3'],
//         'salary' => ['required']
//     ]);

//     $job->update([
//         'title' => request('title'),
//         'salary' => request('salary')
//     ]);

//     return redirect("/jobs/$job->id");
// });

// Route::delete('/jobs/{job}', function (Job $job) {
//     $job->delete();

//     return redirect('/jobs/');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });
