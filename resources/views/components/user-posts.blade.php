<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div class="mb-4">
    <h3>Posts</h3>
    @forelse ($posts as $post)
        <x-post-card :post="$post" />
    @empty
        <p>No posts yet.</p>
    @endforelse

    <!-- Pagination Links -->
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
</x-app-layout>