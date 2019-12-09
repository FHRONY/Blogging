<title> Post Show Page </title>

@extends('layouts.navbar')



@section('content')

<br>
<div class="m-5">
  <h1> {{$post->title}} </h1>
  <br>
 <h5> {{$post->category}}  {{$post->publish_at}}</h5>
 <br>

<img class="rounded mx-auto d-block" src="\storage/images/{{$post->image}}" alt="{{$post->image}}">

 <div class="border border-warning ">
     <p class="m-3">{{$post->content}}</p>
 </div>


</div>

@endsection
