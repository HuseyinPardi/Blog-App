<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $blogs = Blog::latest()->paginate(10);
        return view('dashboard.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Category::all();
        return view('dashboard.blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['slug'] = Str::slug($validated['title']);
        $validated['user_id'] = Auth::id();
        Blog::create($validated);
        return redirect()->route('blogs.index')
            ->with('success', 'Blog başarıyla oluşturuldu.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog): View
    {
        return view('dashboard.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog): View
    {
        return view('dashboard.blogs.edit', compact('blog', ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog): RedirectResponse
    {
        $validated = $request->validated();
        $validated['slug'] = Str::slug($validated['title']);
        $blog->fill($validated);
        $blog->save();
        return redirect()->route('blogs.index')
            ->with('success', 'Blog başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog): RedirectResponse
    {
        $blog->delete();
        return redirect()->route('blogs.index')
            ->with('success', 'Blog başarıyla silindi.');
    }
}
