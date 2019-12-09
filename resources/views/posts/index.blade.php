@extends('layouts.navbar')

@section('content')
@include('inc.messages')
<table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($posts as $post)

        @if(Auth::user()->id == $post->user_id)

        <tr>
            <td>{{ $post->id }}</td>
            <td class="text-truncate"> {{ $post->title }}</td>
            <td class="inline-block text-truncate" style="max-width: 450px"> {{ $post->content }}</td>
            <td>

      <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

          <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>

          <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
     </form>
            </td>
        </tr>
          @endif
        @endforeach
  </table>

    @endsection
