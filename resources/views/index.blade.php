<title>Blog</title>

  @extends('layouts.navbar')

  @section('content')
   @include('inc.messages')
<div class="btn btn-danger float-right m-2">
  <a class="p-2 text-white"  href="{{ route('logout') }}"
     onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
  </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
</div>


        <h1> Welcome {{Auth::user()->name}} </h1>
<br><br>
        <table class="table">
            <tr>
                <td class="table-active text-center"><h3>News Title</h3>  </td>
            </tr>
            <div class="container">



        @foreach($posts as $post)
          <tr>
              <td scope="col">
                <div class="ml-5">
                  <ul>

                   <li><a href="{{ route('posts.show',$post->id) }}">  {{$post->title}}</a></li>

                  </ul>


                </div>

              </td>

          </tr>

        @endforeach

        <td scope="col"></td>
        </div>


  </div>
</div>

        </table>
  @endsection
