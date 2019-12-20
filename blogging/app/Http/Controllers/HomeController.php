<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

      $user_id = auth()->user()->id;

      $user = User::find($user_id);

      $posts = Post::where("user_id",$user_id)->get();

      return view('index')->with(compact('name', 'posts'));

    }
}
