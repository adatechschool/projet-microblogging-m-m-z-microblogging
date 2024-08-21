<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h3>Posts</h3>
            </div>
            <div class="p-6 text-gray-900">
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
        </div>
    </div>
</div>
