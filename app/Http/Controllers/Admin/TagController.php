<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::paginate(10);

        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTagRequest $request)
    {
        $tag = new Tag();

        $tag->name = $request['name'];

        $tag->save();

        $request->session()->flash('success', "Tag Added Successfully!");
        return to_route('admin.tags.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tag = Tag::find($id);

        if (!$tag) {
            request()->session()->flash('danger', __('site.not_exist'));
            return to_route('admin.tags.index');
        }

        return view('admin.tags.show', [
            'tag' => $tag
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', [
            'tag' => $tag
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->name = $request['name'];
        $tag->save();

        $request->session()->flash('success', "Tag Updated Successfully!");
        return to_route('admin.tags.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        request()->session()->flash('success', "Tag Deleted Successfully!");

        return to_route('admin.tags.index');
    }
}
