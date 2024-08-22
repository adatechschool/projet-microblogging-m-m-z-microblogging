<div class="mb-4">
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