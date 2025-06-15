<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
     public function index()
    {
        $blogs = Blog::latest()->paginate(6);
        return view('frontend.blogs.index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('frontend.blogs.show', compact('blog'));
    }
}
