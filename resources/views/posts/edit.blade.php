<x-app-layout>
    <form action="{{route("posts.update", $post)}}" method="POST">
        @method("PUT")
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}">
        </div>
        <div>
            <label for="content">Content</label>
            <textarea type="text" name="content" id="content">{{ $post->content }}</textarea>
        </div>
        <button>submit</button>
    </form>
</x-app-layout>
