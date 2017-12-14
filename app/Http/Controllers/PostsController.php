<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $me = Auth::user();

        if(Auth::user()) {

            $posts = $me->posts()->orderBy('created_at', 'desc')->get();
        }
      //  $posts = $me->where('id', $me->id)->with(['posts' => function ($query) {
        //    $query->orderBy('created_at', 'desc');
       // }])->get();

        return view('welcome', compact('posts'));
    }


    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        $this->validate(request(), [

            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['body','emotion']))
        );


        return redirect('/');
    }

    public function destroy($post_id)
    {
    $posts = Post::where('id', $post_id)->first();
    if (Auth::user() != $posts->user){
        return redirect()->back();
    }
    $posts->delete();
    return redirect('/');
    }
}
