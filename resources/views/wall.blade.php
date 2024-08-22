<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold mb-4">{{ $user->name }}'s Wall</h2>
        </h2>
    </x-slot>

    <div class="container">
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