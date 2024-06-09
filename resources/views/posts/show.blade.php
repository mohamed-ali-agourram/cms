<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            @if ($post->image)
                <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" class="mb-4 rounded" height="200" width="200">
            @endif
            <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
            <p class="mb-4">{{ $post->content }}</p>
            <p class="text-gray-600">Author: <b>{{ $post->user == auth()->user() ? "You" : $post->user->name }}</b></p>
        </div>
        @if ($post->user->id == auth()->user()->id)
            <div class="mt-6 flex gap-4 items-center space-x-4">
                <a href="{{ route('posts.edit', $post) }}"
                    class="bg-blue-500 border px-4 py-2 rounded-md hover:bg-blue-700">
                    Edit
                </a>
                <form action="{{ route('posts.destroy', $post) }}" method="post"
                    onsubmit="return confirm('Are you sure you want to delete this post?');" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 border px-4 py-2 rounded-md hover:bg-red-700">
                        Delete
                    </button>
                </form>
            </div>
        @endif
    </div>
</x-app-layout>
