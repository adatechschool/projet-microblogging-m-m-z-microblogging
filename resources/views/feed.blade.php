<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Feed') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Show all posts") }}
                </div>
            </div>
        </div>
    </div> --}}
@foreach($posts as $post)
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex">
            <div><img src={{ $post->picture}} alt="image" class="block md:hidden lg:block rounded-md h-64 md:h-32 m-4 md:m-0">
            </div>
            <div>
                <div class="mt-2">
                        <a href="#" class="text-2xl font-bold text-gray-700 hover:underline">{{$post->title }}</a>
                        <p class="mt-2 text-gray-600">{{ $post->content}}</p>
                </div>
                <div class="flex items-center justify-between mt-4">
                        <a href="#" class="text-blue-500 hover:underline">Created on {{$post->created_at}}</a>
                    <div>
                    <a href="#" class="flex items-center">
                        <h1 class="font-bold text-gray-700 hover:underline">user n°{{$post->user_id}}</h1>
                    </a>
                    </div>
            </div>
        </div>
    </div>
</div>
@endforeach


</x-app-layout>