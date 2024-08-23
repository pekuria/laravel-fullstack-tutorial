<h2> {{ $job->title }} </h2>
<p>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    Congrats! Your job is now live on our website.
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View Your Job Listing</a>
</p>


