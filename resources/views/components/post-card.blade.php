<div class="bg-gray-100 px-2 py-2">
    <article class="mx-auto my-2 flex max-w-md flex-col rounded-2xl bg-white px-4 shadow md:max-w-5xl md:flex-row md:items-center">
        <div class="shrink-0 my-4 md:mr-8 md:max-w-sm">
            @if ($post->picture)
            <div class="w-full h-64 overflow-hidden rounded-2xl">
                <!-- Container with fixed height and width -->
                <img class="w-full h-full object-cover" src="{{ asset($post->picture) }}" alt="Post Image" />
            </div>
            @endif
        </div>
        <div class="py-4 sm:py-8">
            @if ($post->title)
                <a href="#" class="mb-6 block text-2xl font-medium text-gray-700">{{ $post->title }}</a>
            @endif
            <p class="mb-6 text-gray-800 text-xl">{{ $post->content }}</p>
            <div class="flex items-center">
                @if ($post->user->profile_image)
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ $post->user->profile_image }}" alt="{{ $post->user->name }}" />
                @endif
                <p class="ml-4">
                    <a href="{{ route('user.profile', ['user' => $post->user->id]) }}" class="block font-medium text-blue-800 underline">
                        {{ $post->user->name }}
                    </a>
                    <span class="text-sm text-gray-400">{{ $post->created_at->format('d M Y, H:i') }}</span>
                </p>
            </div>
        </div>
    </article>
</div>




{{-- <div class="card mb-3">
    <div class="card-body">
        <p>{{ $post->content }}</p>
        @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="img-fluid">
        @endif
        <p class="text-muted">Posted at {{ $post->created_at->format('d M Y, H:i') }}</p>
    </div>
</div> --}}




{{-- <div class="bg-gray-100 px-2 py-10"> --}}
   {{--  <article class="mx-auto my-10 flex max-w-md flex-col rounded-2xl bg-white px-4 shadow md:max-w-5xl md:flex-row md:items-center">
      <div class="shrink-0 my-4 md:mr-8 md:max-w-sm">
        <img class="rounded-2xl" src="https://images.unsplash.com/photo-1663287695452-bf59337d8746?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="" />
      </div>
      <div class="py-4 sm:py-8">
        <a href="#" class="mb-6 block text-2xl font-medium text-gray-700">Long walks are helpful in decreasing stress levels</a>
        <p class="mb-6 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit illum consequatur quia doloremque! Similique eius enim nostrum totam.</p>
        <div class="flex items-center">
          <img class="h-10 w-10 rounded-full object-cover" src="/images/ddHJYlQqOzyOKm4CSCY8o.png" alt="Simon Lewis" />
          <p class="ml-4 w-56">
            <strong class="block font-medium text-gray-700">Johanson Levinsiki</strong>
            <span class="text-sm text-gray-400">Jun 26, 2022</span>
          </p>
        </div>
      </div>
    </article>
  </div> --}}
  