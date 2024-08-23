<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Board</title>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full font-hanken-grotesk">
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="/">
                             <img class="h-8 w-auto" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Your Company">
                           </a>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <x-nav-link href="/" :active="request()->is('/')">Jobs</x-nav-link>
                                <x-nav-link href="/careers" :active="request()->is('careers')">Careers</x-nav-link>
                                <x-nav-link href="/salaries" :active="request()->is('salaries')">Salaries</x-nav-link>
                                <x-nav-link href="/companies" :active="request()->is('companies')">Companies</x-nav-link>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            @guest
                                <x:nav-link href="/login" :active="request()->is('login')">Login</x:nav-link>
                                <x:nav-link href="/register" :active="request()->is('register')">Register</x:nav-link>
                            @endguest
                            @auth
                            <x:nav-link href="/jobs/create">Create Job</x:nav-link>
                                <form  method="POST" action="/logout">
                                    @csrf
                                    @method('DELETE')
                                    <x:form.button>Log Out</x:form.button>
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>
        </nav>
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900  m-auto">{{ $heading }} </h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
