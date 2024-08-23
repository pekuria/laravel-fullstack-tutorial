<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tag;
use App\Models\Job;

class TagController extends Controller
{
    /**
     * Handle the incoming request.
     */

    public function __invoke(Tag $tag)
    {

        $jobs = Job::with(['employer', 'tags'])->whereHas('tags', function($q) use ($tag) {
            $q->where('tags.id', '=', $tag->id);
        })->get();

        return view('results', ['jobs' => $jobs]);

    }
}
