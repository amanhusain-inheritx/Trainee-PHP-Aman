<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return Tag::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:tags,name'
        ]);

        return Tag::create($validated);
    }

    public function show($id)
    {
        return Tag::with('posts')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);

        $tag->update($request->validate([
            'name' => 'required|unique:tags,name,' . $id
        ]));

        return $tag;
    }

    public function destroy($id)
    {
        Tag::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
