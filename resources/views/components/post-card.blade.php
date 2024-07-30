<div class="card mb-3">
    <div class="card-body">
        <p>{{ $post->content }}</p>
        @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="img-fluid">
        @endif
        <p class="text-muted">Posted at {{ $post->created_at->format('d M Y, H:i') }}</p>
    </div>
</div>