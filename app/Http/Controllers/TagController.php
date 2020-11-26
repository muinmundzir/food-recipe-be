<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\TagRequest;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('tags.list-tags', ['tags' => $tags]);
    }

    public function create()
    {
        return view('tags.add-tag');
    }

    public function store(TagRequest $request)
    {
        Tag::create([
            'name' => $request->name
        ]);
        return redirect('tags');
    }

    public function show(Tag $tag)
    {
        // 
    }

    public function edit(Tag $tag)
    {
        return view('tags.edit-tag', ['tag' => $tag]);
    }

    public function update(TagRequest $request, Tag $tag)
    {
        $tag->update([
            'name' => $request->name
        ]);
        return redirect('tags');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect('tags');
    }
}
