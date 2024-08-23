<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <x:form.form method="POST" action="/login">
        <x:form.input label="Email" name="email" type="email" />
        <x:form.input label="Password" name="password" type="password" />

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/">Cancel</a>
            <x:form.button>Login</x:form.button>
        </div>
    </x:form.form>

</x-layout>
