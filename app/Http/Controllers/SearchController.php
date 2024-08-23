<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Job;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $jobs = Job::where('title', 'LIKE',  '%'.request('q').'%')->with(['employer', 'tags'])->get();

        return view('results', ['jobs' => $jobs]);
    }
}
