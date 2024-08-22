<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <h2 class="text-2xl font-bold mb-4">Fil d'actualités</h2>

        <!-- Section des Posts -->
        <div class="mb-4">
            @forelse ($posts as $post)
                <x-post-card :post="$post" />
            @empty
                <p class="text-center text-gray-500">No posts available.</p>
            @endforelse
        </div>
</x-app-layout>