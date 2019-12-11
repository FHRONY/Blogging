@extends('layouts.navbar2')
@section('content')
                <div class="">

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

                         </table>
                </div>


            </div>
        </div>
    </body>
</html>
@endsection
