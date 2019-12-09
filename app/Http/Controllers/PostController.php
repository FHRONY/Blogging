<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{


  public function __construct()
{
    $this->middleware('auth');
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user_id = auth()->user()->id;

      $user = User::find($user_id);

      $posts = Post::all();

      return view('posts.index')->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $this->validate($request, [
    'title' => 'required',
    'content' => 'required',
    'user_id' => 'required',
    'publish_at' => 'required',
    'category' => 'required',
    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     ]);
     // Get filename with extension
     $filenameWithExt = $request->file('image')->getClientOriginalName();

       // Get just the filename
       $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

       // Get extension
       $extension = $request->file('image')->getClientOriginalExtension();

       // Create new filename
       $filenameToStore = $filename.'_'.time().'.'.$extension;

       // Uplaod image
       $path= $request->file('image')->storeAs('public/images/', $filenameToStore);

       // Upload Photo
       $post = new Post;
       $post->content = $request->input('content');
       $post->title = $request->input('title');
       $post->user_id = $request->input('user_id');
       $post->publish_at = $request->input('publish_at');
       $post->category = $request->input('category');
       $post->image = $filenameToStore;

       $post->save();


        return redirect()->route('posts.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

    return view('posts.show')->with(compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

     $this->validate($request, [
     'title' => 'required',
     'content' => 'required',
     'user_id' => 'required',
     'publish_at' => 'required',
     'category' => 'required',
     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      // Get filename with extension
      if(!empty($request->file('image')))
      {
      $filenameWithExt = $request->file('image')->getClientOriginalName();

        // Get just the filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        // Get extension
        $extension = $request->file('image')->getClientOriginalExtension();

        // Create new filename
        $filenameToStore = $filename.'_'.time().'.'.$extension;

        // Uplaod image
      $path= $request->file('image')->storeAs('public/images/', $filenameToStore);




         $post->content = $request->input('content');
         $post->title = $request->input('title');
         $post->user_id = $request->input('user_id');
         $post->publish_at = $request->input('publish_at');
         $post->category = $request->input('category');
         $post->image = $filenameToStore;

        $post->update();
      }

        else {

          $post->content = $request->input('content');
          $post->title = $request->input('title');
          $post->user_id = $request->input('user_id');
          $post->publish_at = $request->input('publish_at');
          $post->category = $request->input('category');


         $post->update();

        }

     return redirect()->route('posts.index')
                     ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      $post->delete();

    return redirect()->route('posts.index')
                    ->with('success','Post deleted successfully');
    }

}
