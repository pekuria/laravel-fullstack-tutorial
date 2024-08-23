<x:layout>
    <x:slot:heading>
        Job listings
    </x:slot:heading>
    <x:form.form method="POST" action="/jobs">
    <x:form.input label="Title" name="title" placeholder="CEO" />
    <x:form.input label="Salary" name="salary" placeholder="£90,0000" />
    <x:form.input label="Location" name="location" placeholder="London" />


    <x:form.select label="Job Type" name="job_type">
        <option>Part Time</option>
        <option>Full Time</option>
    </x:form.select>

    <x:form.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />
    <x:form.checkbox label="Feature (Costs Extra)" name="featured" />

    <x:form.divider />

    <x:form.input label="Tags (comma seperated)" name="tags" placeholder="laracast, video, audio" />

    <x:form.button>Publish</x:form.button>
    </x:form.form>





    {{-- <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create A New Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">We just need some information from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                   <x:form.field>
                    <x:form.label for="title">Title</x:form.label>
                    <div class="mt-2">
                        <x:form.input type="text" name="title" id="title" placeholder="CEO" required ></x:form.input>
                        <x:form.error name="title"></x:form.error>
                    </div>
                   </x:form.field>
                   <x:forms.field>
                    <x:form.label for="salary">Salary</x:form.label>
                    <div class="mt-2">
                        <x:form.input type="text" name="salary" id="salary" placeholder="100000" required ></x:form.input>
                        <x:form.error name="salary"></x:form.error>
                    </div>
                   </x:forms.field>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <x:form.button>Save</x:form.button>

            </div>
    </form> --}}

</x:layout>
