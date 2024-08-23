<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use App\Models\Job;
use App\Jobs\TranslateJob;


// Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::get('test', function() {
    $job = Job::first();
    TranslateJob::dispatch($job);
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store'])->name('login');
});

//Auth

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');



Route::controller(JobController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/jobs/create', 'create')->middleware('auth');
    Route::get('/jobs/{job}', 'show');
    Route::post('/jobs', 'store')->middleware('auth');
    Route::get('/jobs/{job}/edit', 'edit')->middleware('auth')->can('edit', 'job');
    Route::patch('/jobs/{job}', 'update')->middleware('auth')->can('edit', 'job');
    Route::delete('/jobs/{job}', 'destroy')->middleware('auth')->can('edit', 'job');
});


Route::get('/tags/{tag:name}', TagController::class);
Route::get('/search', SearchController::class);



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
