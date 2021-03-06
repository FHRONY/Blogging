<title> Post Show Page </title>

@extends('layouts.navbar')



@section('content')

<br>
<div class="m-5">
  <h1> {{$post->title}} </h1>
  <br>
 <h5> {{$post->category}}  {{$post->publish_at}}</h5>
 <hr>

<img class="img-responsive" width="1300" height="800" src="\storage/images/{{$post->image}}" alt="{{$post->image}}">

<hr>
 <div class="border border-warning ">
     <p class="m-3">{{$post->content}}</p>
 </div>
</div>
<hr>

@if(Auth::user())
<div class="m-4">

  @if($count)

    <h3 class="text-success"> You Liked This Post</h3>

    @foreach($likes as $like)
          <form action="{{ route('comments.destroy',$like->id) }}" method="POST">
        <input type="hidden" name="post_id" value="{{$like->post_id}}">

                        @csrf
                        @method('DELETE')

            <button type="submit" class="btn btn-danger">Unlike</button>
         </form>
    @endforeach
    @else

      <form class="" action="/posts/{{$post->id}}/create_likes" method="post">

      @csrf
        <button type="submit" name="submit" class="btn btn-success" >Like</button>

      </form>
    @endif


</div>
@endif

<div class="m-4">
  <h5 class="">Total Likes: {{$total_likes}}</h5>
</div>

<hr>


<div class="ml-5">
  <h3 class="text-primary">Comments:</h3>
</div>
<div class=" ml-5">
  <div class="ml-5">
    <hr>
@foreach($comments as $comment)
  <hr>

   <strong><h4>{{$comment->user_name}}</h4></strong>
    AT: <strong> {{$comment->created_at}}</strong>
    <p>{{$comment->user_comments}} </p>



<hr>
@endforeach

        </div>

        </div>
<br><br>
<form action="{{ route('comments.store') }}" method="POST">
    @csrf
    @if(Auth::user())

     <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
      <input type="hidden" name="post_id" value="{{$post->id}}">
      <input type="hidden" name="user_name" value="{{Auth::user()->name}}">
  <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Post A Comment:</strong>
          <textarea class="form-control" style="height:150px" name="user_comments" placeholder="Type Comment"></textarea>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </div>


@else
<div class="ml-3">
  <strong>Post A Comment:</strong>
</div>

<hr>
<a class="btn btn-primary col-xs-12 col-sm-12 col-md-12 text-center " href="{{ route('login') }}">Please Login First</a>
<hr>
@endif
</form>

@endsection
