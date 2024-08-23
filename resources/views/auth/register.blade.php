<x-layout>
    <x-slot:heading>
        Register User
    </x-slot:heading>

    <x:form.form method="POST" action="/register" enctype="multipart/form-data">
        <x:form.input label="First Name" name="first_name" type="text" placeholder="First Name" />
        <x:form.input label="Last Name" name="last_name" type="text"  placeholder="Last Name" />
        <x:form.input label="Email" name="email" type="email"  placeholder="Email" />
        <x:form.input label="Password" name="password" type="password"/>
        <x:form.input label="Password Confirmation" name="password_confirmation" type="password"/>

        <x:form.divider />

        <x:form.input label="Employer Name" name="employer" type="text"/>
        <x:form.input label="Employer Logo" name="logo" type="file" />
        <div class="mt-10">
            <x:form.button>Create Account</x:form.button>
        </

</x:form.form>

</x-layout>
