<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facades\App\Repository\Blogs;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('blog', ['blogs' => $blogs ]);
    }
 
    public function blogDetail(Blog $post_slug)
    {
        return view('blog-details', ['blog' => $post_slug ]);
    }
 
    public function fetchLike(Request $request)
    {
        $blog = Blog::find($request->blog);
        return response()->json([
            'blog' => $blog,
        ]);
    }
 
    public function handleLike(Request $request)
    {
        $blog = Blog::find($request->blog);
        $value = $blog->like;
        $blog->like = $value+1;
        $blog->save();
    }    
 
    public function fetchDislike(Request $request)
    {
        $blog = Blog::find($request->blog);
        return response()->json([
            'blog' => $blog,
        ]);
    }
 
    public function handleDislike(Request $request)
    {
        $blog = Blog::find($request->blog);
        $value = $blog->dislike;
        $blog->dislike = $value+1;
        $blog->save();
    }
}
