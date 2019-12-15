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

                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do You Wants To delete this Post?')">Delete</button>
     </form>
            </td>
        </tr>

        @endforeach
  </table>

    @endsection
