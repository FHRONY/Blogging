<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
class WelcomeController extends Controller
{

  public function __construct()
   {

   }

   public function index(Request $request)
    {

         $category = $request->category;

      if($category)
       {
         $posts=Post::where('category',$category)->get();
       }

      else
       {
         $posts=Post::all();

       }

return view('welcome')->with(compact('posts'));

    }
}
