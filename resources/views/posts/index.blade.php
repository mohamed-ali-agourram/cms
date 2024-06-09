<x-app-layout>
    <br>
    <a href="{{route("posts.create")}}">Add new post</a>
    @foreach ($posts as $post)
        <div>
            <a href="{{route("posts.show", $post)}}">
                <h1><b>{{ $post->title }}</b></h1>
                <p>{{ Str::limit($post->content, 20) }}</p>
                <p>author: {{ $post->user->name }}</p>
            </a>
        </div>
        <br>
    @endforeach
    {{ $posts->links() }}
</x-app-layout>
