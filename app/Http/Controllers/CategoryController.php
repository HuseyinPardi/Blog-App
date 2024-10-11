<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('dashboard.categories.index', compact('categories'));
    }


    public function showBlogsByCategory(Category $category): View
    {
        $blogs = $category->blogs;
        return view('dashboard.category-blogs', compact('blogs'));
    }
}
