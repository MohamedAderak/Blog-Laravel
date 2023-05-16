<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = Blog::all();
        return view('blog', ['blogs' => $table]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'image' => 'required|max:2048',
        'description' => 'required',
        'active' => 'required',
    ]);

    $article = new Blog();
    $article->title = $validatedData['title'];
    $article->content = $validatedData['content'];
    $article->description = $validatedData['description'];
    $article->link = $validatedData['image'];
    $article->active = $validatedData['active'];
    $article->save();

    return to_route('blog.index')->with('success', 'New Article added successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $table = Blog::find($id);
        return view('article', ['blog' => $table]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $table = Blog::find($id);
        return view('update', ['blog' => $table]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'required|max:2048',
            'description' => 'required',
            'active' => 'required',
        ]);

        $article = Blog::find($id);
        $article->title = $validatedData['title'];
        $article->content = $validatedData['content'];
        $article->link = $validatedData['image'];
        $article->description = $validatedData['description'];
        $article->active = $validatedData['active'];

        $article->save();

        return to_route('blog.index')->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    { 
        Blog::destroy($id);
        return to_route('blog.index')->with('success', 'Article deleted successfully');
    }
}
