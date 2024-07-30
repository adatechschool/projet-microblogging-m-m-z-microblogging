@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">{{ $user->name }}'s Wall</h2>

    <!-- Section Biographie -->
    <div class="mb-4">
        <h3>Biography</h3>
        <p>{{ $user->biography }}</p>
    </div>

    <!-- Section des Posts -->
    <div class="mb-4">
        <h3>Posts</h3>
        @forelse ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <p>{{ $post->content }}</p>
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="img-fluid">
                    @endif
                    <p class="text-muted">Posted at {{ $post->created_at->format('d M Y, H:i') }}</p>
                </div>
            </div>
        @empty
            <p>No posts yet.</p>
        @endforelse

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection