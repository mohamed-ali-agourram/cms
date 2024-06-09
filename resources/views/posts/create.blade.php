<x-app-layout>
    <form action="{{route("posts.store")}}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="content">Content</label>
            <textarea type="text" name="content" id="content"></textarea>
        </div>
        <button>submit</button>
    </form>
</x-app-layout>
