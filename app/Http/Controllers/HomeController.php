<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', '2fa']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
      {
        $me = Auth::user();
      if(Auth::user()) {

          $posts = $me->posts()->orderBy('created_at', 'desc')->get();
      }
      return view('home', compact('posts'));
    }
}
