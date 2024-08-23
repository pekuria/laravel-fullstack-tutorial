@props(['job'])
<x:panel>
    <div class="self-start text-sm">{{$job->employer->name}} </div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm mt-4">{{$job->job_type}}  - From {{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x:tag :$tag size="small"> {{$tag->name}} </x:tag>
            @endforeach
        </div>

       <x:employer-logo :employer="$job->employer" />
    </div>
</x:panel>
