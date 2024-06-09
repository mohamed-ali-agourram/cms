<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="mb-4">
            <a href="{{ route('posts.create') }}" class="bg-green-500 hover:bg-green-700 border font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Add new post
            </a>
        </div>
        @foreach ($posts as $post)
            <div class="bg-white shadow-md rounded-lg p-6 mb-4">
                <a href="{{ route('posts.show', $post) }}" class="block hover:bg-gray-100 p-4 rounded-md transition">
                    <h1 class="text-2xl font-bold mb-2">{{ $post->title }}</h1>
                    <p class="text-gray-700 mb-2">{{ Str::limit($post->content, 20) }}</p>
                    <p class="text-gray-600">Author: {{ $post->user->name }}</p>
                </a>
            </div>
        @endforeach
        <div class="mt-6">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
