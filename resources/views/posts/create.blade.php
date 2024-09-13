<x-app-layout>
    <h1>Create Post</h1>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" id="title" name="title">
        <br>
        <label for="content">Content:</label>
        <textarea name="content" id="content"></textarea>
        <br>
        <input type="submit" value="create">
    </form>
</x-app-layout>