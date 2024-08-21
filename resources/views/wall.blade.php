<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $user->name }}'s {{ __('Wall') }}
        </h2>
    </x-slot>
 
<!-- Section Biographie -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3>Biography</h3>
                </div>
                <div class="p-6 text-gray-900">
                    {{ $user->biography }}
                </div>
            </div>
        </div>
    </div>

        <!-- Section des Posts -->
        <div class="mb-4">
            <x-user-posts :posts="$posts"/>
        </div>
    </div>
</x-app-layout>