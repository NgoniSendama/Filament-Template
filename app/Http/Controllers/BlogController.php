<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
        return view('blog', compact('blog'));
    }
    public function show($slug)
    {
        $blogs = Blog::all();
        $category = Category::all();
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('blog-detail', compact('blog','blogs','category'));
    }

    public function about_index()
    {
        $blog = Blog::latest('created_at')->take(4)->get();
        return view('about', compact('blog'));
    }
    public function about_show($slug)
    {
        $blogs = Blog::all();
        $category = Category::all();
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('blog-detail', compact('blog','blogs','category'));
    }
}
