<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view("blog.index", compact("blogs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("blog.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $imagePath = $request->file('image')->store('blogs', 'public');
        $blog = Blog::create([
            "short_description" => $request->short_description,
            "long_description" => $request->long_description,
            "short_title" => $request->short_title,
            "long_title" => $request->long_title,
            'image' => $imagePath,
            "published_at" => $request->published_at,
        ]);
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blog.view', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $blog->update([
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'short_title' => $request->short_title,
            'long_title' => $request->long_title,
            'published_at' => $request->published_at,
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($blog->image);

            $imagePath = $request->file('image')->store('blogs', 'public');

            $blog->update([
                'image' => $imagePath,
            ]);
        }

        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {

        $imagePath = $blog->image;

        if ($imagePath) {
            Storage::disk('public')->delete($imagePath);
        }

        $blog->delete();


        return redirect()->route('blog.index');
    }
}
