@props(['job'])

<x:panel class="flex gap-x-6">
    <div>
        <x:employer-logo :employer="$job->employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <p href="{{ $job->url }}"
            class="self-start text-sm text-gray-400 transition-colors duration-300">{{ $job->employer->name }}</p>
        <h3 class="group-hover:text-blue-800 font-bold mt-3 text-xl">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->job_type }} - From {{ $job->salary }}</p>
    </div>

    <div>
        <div>
            @foreach ($job->tags as $tag)
                <x:tag :$tag> {{ $tag->name }} </x:tag>
            @endforeach
        </div>

    </div>
</x:panel>
