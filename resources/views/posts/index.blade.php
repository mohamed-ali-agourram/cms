<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="mb-4">
            <a href="{{ route('posts.create') }}" class="bg-green-500 hover:bg-green-700 border font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Add new post
            </a>
        </div>
        <form action="{{ route('posts.index') }}" method="GET" class="mb-6">
            <div class="flex gap-2">
                <input type="search" name="search" placeholder="Search by title or content" value="{{ $search }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <button type="submit" class="ml-2 bg-blue-500 hover:bg-blue-700 border font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Search
                </button>
            </div>
        </form>
        @foreach ($posts as $post)
            <div class="bg-white shadow-md rounded-lg p-6 mb-4">
                <a href="{{ route('posts.show', $post) }}" class="block hover:bg-gray-100 p-4 rounded-md transition">
                    <h1 class="text-2xl font-bold mb-2">{{ $post->title }}</h1>
                    @if ($post->image)
                        <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" class="mb-4 rounded" height="200" width="200">
                    @endif
                    <p class="text-gray-700 mb-2">{{ Str::limit($post->content, 20) }}</p>
                    <p class="text-gray-600">Author: <b>{{ $post->user == auth()->user() ? "You" : $post->user->name }}</b></p>
                </a>
            </div>
        @endforeach
        <div class="mt-6">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
