<title>Blog</title>

  @extends('layouts.navbar')

  @section('content')

<img class="img-responsive" width="100%" height="430" src="\Cover/FH RONY WEBSITE COVER.jpg" alt="FH RONY WEBSITE">
<hr>

        <h1 class="text-info text-center"> Welcome {{Auth::user()->name}} </h1>
<hr>
@include('inc.messages')


<table class="table">
    <tr>
      <td  class="table-active text-center">

        <h3>Your Posted News</h3> </td>
   </tr>
</table>

   <div class="container">
    <div class="m-2">
      <div class="card mb-4 bg-dark">
        <div class="card-body p-5 ">

          <div class="custom-scrollbar-css p-2 bg-dark">


        <table class="table">

        @foreach($posts as $post)

          <tr >
              <td   scope="col">

                <div class="col bg-light" >

                     <a  href="{{ route('posts.show',$post->id) }}" class="text-decoration-none">

                     <img class="img-responsive m-2" width="120" height="120" src="\storage/images/{{$post->image}}" alt="{{$post->image}}">

                    {{ $post->title}}

                    </a>

                </div>


          </td>

      </tr>

        @endforeach


        </table>

        </div>
      </div>
    </div>
  </div>
</div>
  @endsection
