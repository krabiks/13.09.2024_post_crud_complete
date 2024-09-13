<x-app-layout>
    <h1>Title: {{ $post->title }}</h1>
    <p>Content: {{ $post->content }}</p>

    <!-- Button to go back to the index page -->
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to all posts</a>
</x-app-layout>
