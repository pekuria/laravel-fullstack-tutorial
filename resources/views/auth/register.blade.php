<x-layout>
    <x-slot:heading>
        Register User
    </x-slot:heading>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Create A New Job</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">We just need some information from you.</p>

                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <x:form-field>
                            <x:form-label for="first_name">First Name</x:form-label>
                            <div class="mt-2">
                                <x:form-input type="text" name="first_name" id="first_name" placeholder="first name"
                                    required></x:form-input>
                                <x:form-error name="first_name"></x:form-error>
                            </div>
                        </x:form-field>
                        <x:form-field>
                            <x:form-label for="last_name">Last Name</x:form-label>
                            <div class="mt-2">
                                <x:form-input type="text" name="last_name" id="last_name" placeholder="last name"
                                    required></x:form-input>
                                <x:form-error name="last_name"></x:form-error>
                            </div>
                        </x:form-field>
                        <x:form-field>
                            <x:form-label for="email">Email</x:form-label>
                            <div class="mt-2">
                                <x:form-input type="email" name="email" id="email" placeholder="email"
                                    required></x:form-input>
                                <x:form-error name="email"></x:form-error>
                            </div>
                        </x:form-field>
                        <x:form-field>
                            <x:form-label for="paswword">Password</x:form-label>
                            <div class="mt-2">
                                <x:form-input type="password" name="password" id="password" placeholder="password"
                                    required></x:form-input>
                                <x:form-error name="password"></x:form-error>
                            </div>
                        </x:form-field>
                        <x:form-field>
                            <x:form-label for="confirm_password">Confirm Password</x:form-label>
                            <div class="mt-2">
                                <x:form-input type="password" name="password_confirmation" id="password_confirmation"
                                    placeholder="confirm password" required></x:form-input>
                                <x:form-error name="password_confirmation"></x:form-error>
                            </div>
                        </x:form-field>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/">Cancel</a>
                <x:form-button>Register</x:form-button>

            </div>
    </form>

</x-layout>
