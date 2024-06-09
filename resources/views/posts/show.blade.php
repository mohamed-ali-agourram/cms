<x-app-layout>
    <br>
    <div>
        <h1><b>{{ $post->title }}</b></h1>
        <p>{{ $post->content }}</p>
        <p>author: {{ $post->user->name }}</p>
    </div>
    @if ($post->user->id == auth()->user()->id)
        <div>
            <a href="{{ route('posts.edit', $post) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this post?');">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </div>
    @endif
</x-app-layout>
