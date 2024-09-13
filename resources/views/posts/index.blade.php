<x-app-layout>
    <h1>All posts</h1>
    <ul>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create post</a>
    <br>
        @foreach($posts as $post)
        <li>
            <h2>Title: {{$post->title}}</h2>
            <p>Content: {{$post->content}}</p>
            <div>
                <a href="{{ route('posts.show', $post) }}">Show</a>
                <a href="{{ route('posts.edit', $post) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
</x-app-layout>
