<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Wall') }}
        </h2>
    </x-slot>

    <div class="container">
        <h2 class="mb-4">{{ $user->name }}'s Wall</h2>

        <!-- Section Biographie -->
        {{-- <div class="mb-4">
            <h3>Biography</h3>
            <p>{{ $user->biography }}</p>
        </div> --}}

        <!-- Section des Posts -->
        <div class="mb-4">
            <x-user-posts :posts="$posts"/>
        </div>
    </div>
</x-app-layout>