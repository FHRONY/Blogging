@extends('layouts.navbar')

@section('content')
    <div class="row">

      <div class="ml-3">
          <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
      </div>

        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Edit Posts</h2>
            </div>
          <br>
    </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')


           <div class="form-group">
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Title:</strong>
                      <input type="text" name="title" class="form-control" value="{{$post->title}}">
                      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                  </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Date:</strong>
                      <output name="result">{{$post->publish_at}}</output>
                      <input type="date" name="publish_at" class="form-control" value="{{$post->publish_at}}">
                  </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Category:</strong>
                     <div>
                       <input type="text" name="category" class="form-control" value="{{$post->category}}">
                     </div>
                   </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                   <strong>Image:</strong>
                 <div>
                   <input type="file" name="image" class="form-control">
                </div>
             </div>

     <br>

              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Content:</strong>

                      <textarea class="form-control" style="height:150px" name="content">{{$post->content}}</textarea>
                  </div>
              </div>

          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update Post</button>
          </div>
      </div>

    </form>
@endsection
