<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::all(); 
        return view('posts.index', ['posts' => $posts]); 
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = 1;

        Post::create($data);
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]); 
    }
    
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]); 
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        $data['user_id'] = 1;
        $post->update($data);
        return redirect()->route('posts.index');
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
