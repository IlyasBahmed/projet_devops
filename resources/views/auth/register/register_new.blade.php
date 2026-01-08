<x-layouts.auth>
    <x-slot name="title">Register</x-slot>

    <x-slot name="content">
        <div class="mb-4 text-center">
            <img src="{{ asset('public/img/akaunting-logo-green.svg') }}" class="w-16 mx-auto mb-3" alt="Akaunting">
            <h1 class="text-lg font-semibold">Create new account</h1>
            <p class="text-sm text-gray-500">Front only – no invitation</p>
        </div>

        <form action="#" method="GET">
            <div class="grid gap-3">
                <input class="w-full border rounded p-2" placeholder="Full name">
                <input class="w-full border rounded p-2" type="email" placeholder="Email address">
                <input class="w-full border rounded p-2" type="password" placeholder="Password">
                <input class="w-full border rounded p-2" type="password" placeholder="Confirm password">

                <button class="w-full bg-green-600 text-white p-2 rounded">
                    Create account
                </button>

                <a href="{{ route('login') }}" class="text-center text-sm text-blue-600">
                    Already have an account? Login
                </a>
            </div>
        </form>
    </x-slot>
</x-layouts.auth>