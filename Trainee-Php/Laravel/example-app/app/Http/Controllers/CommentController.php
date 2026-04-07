<?php
namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return Comment::with(['user', 'post'])->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'body' => 'required',
            'user_id' => 'required|exists:users,id',
            'post_id' => 'required|exists:posts,id',
        ]);

        return Comment::create($validated);
    }

    public function show($id)
    {
        return Comment::with(['user', 'post'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->update($request->only('body'));

        return $comment;
    }

    public function destroy($id)
    {
        Comment::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}