<x:layout>
    <x:slot:heading>
        Job listings
    </x:slot:heading>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find your Next Job</h1>

            <x:form.form action="/search" class="mt-6">
                <x:form.input :label="false" name="q" placeholder="Web developer..." type="text" />
            </x:form.form>
        </section>



        <section class="mb-8">
            <x:section-heading>Featured Jobs</x:section-heading>
            <div class="grid lg:grid-cols-3 gap-8">
                @foreach ($featured_jobs as $job)
                    <x:job-card :$job />
                @endforeach
            </div>
        </section>
        <section>
            <x:section-heading>Tags</x:section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x:tag :$tag />
                @endforeach

            </div>
        </section>
        <section>
            <x:section-heading>Recent Jobs</x:section-heading>
            <div class="mt-6 space-y-3">
                @foreach ($jobs as $job)
                    <x:job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x:layout>
