<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // GET /api/posts
    public function index()
    {
        $posts = Post::with(['comments', 'tags', 'user'])->get();
        return response()->json($posts);
    }

    // POST /api/posts
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required|exists:users,id',
            'tags' => 'array'
        ]);

        $post = Post::create($request->only(['title','content','user_id']));

        if ($request->tags) {
            $post->tags()->attach($request->tags);
        }

        return response()->json($post, 201);
    }

    // GET /api/posts/{id}
    public function show($id)
    {
        return Post::with(['user', 'comments.user', 'tags'])->findOrFail($id);
    }

    // PUT /api/posts/{id}
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->update($request->only(['title', 'content']));

        if ($request->tags) {
            $post->tags()->sync($request->tags);
        }

        return $post;
    }

    // DELETE /api/posts/{id}
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
