<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.dashboard.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        return view('admin.dashboard.blogs.create', compact(['categories', 'users']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $validated = $request->validated();
        $validated['slug'] = Str::slug($validated['title']);
        Blog::create($validated);
        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog başarıyla oluşturuldu.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('admin.dashboard.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.dashboard.blogs.edit', compact('blog', ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $validated = $request->validated();
        $validated['slug'] = Str::slug($validated['title']);
        $blog->fill($validated);
        $blog->save();
        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog başarıyla silindi.');
    }
}
