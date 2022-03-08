<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        // app()->setLocale($locale);
        $posts = Post::latest()->get();
        return view('blogs')->with(compact('posts'));
    }

    public function show($slug)
    {
        // app()->setLocale($locale);
        $post = Post::where('slug', $slug)->first();
        return view('show')->with(compact('post'));
    }

    public function category(Category $category)
    {
        $posts = $category->posts()->latest()->get();
        return view('blogs',compact('category','posts'));
    }

    public function tag(Tag $tag)
    {
        $posts = $tag->posts()->latest()->get();
        return view('blogs',compact('tag','posts'));
    }

}