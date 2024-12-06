<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {

        $posts = Post::where('published', true)->latest()->paginate(10);

        return view('web.blog', compact('posts'));
    }


    public function show($slug)
    {

        $post = Post::where('slug', $slug)->with('user', 'categories', 'comments')->firstOrFail();


        return view('web.blog-single', compact('post'));
    }
}
