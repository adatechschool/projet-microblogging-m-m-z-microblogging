<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Users') }}
        </h2>
    </x-slot>

    @foreach ($users as $user)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="">
                    {{ $user->name }}'s Biography
                    </a>
                </div>

                <div class="p-6 text-gray-900">
                    {{ $user->biography}}
                </div>
            </div>
        </div>
    </div>
    @endforeach

</x-app-layout>