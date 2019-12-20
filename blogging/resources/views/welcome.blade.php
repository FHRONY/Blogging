@extends('layouts.navbar2')
@section('content')

<img class="img-responsive" width="100%" height="430" src="\Cover/FH RONY WEBSITE COVER.jpg" alt="FH RONY WEBSITE">
<hr>
<h1 class="text-danger text-center">
   <div class="spinner-grow text-muted">
   </div> <div class="spinner-grow text-success">
   </div>WELCOME TO OUR WEBSITE
   <div class="spinner-grow text-info"></div>
   <div class="spinner-grow text-warning"></div>
</h1>

<hr>
<h2 class="text-info text-center">
  <div class="spinner-grow text-danger"></div>
  <div class="spinner-grow text-secondary">
  </div>FHRONY.COM  <div class="spinner-grow text-dark"></div>
  <div class="spinner-grow text-primary"></div>
</h2>
<hr>



   <div class="container ">



        <div class="m-2 ">

           <div class="card mb-4 bg-dark">
               <div class="card-body p-4 ">
                  <div class="custom-scrollbar-css p-2 bg-dark">

                       @foreach($posts as $post)
                        <div class="bg-light" >
                       <a href="{{ route('posts.show',$post->id) }}"  class="text-decoration-none">

                         <img class="img-responsive m-1" width="120" height="120" src="\storage/images/{{$post->image}}" alt="{{$post->image}}">
                         {{$post->title}}


                       </a>

<hr>

                        </div>
                   @endforeach

                     </div>
                   </div>
                 </div>

              </div>

         </div>

@endsection
