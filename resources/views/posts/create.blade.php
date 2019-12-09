
@extends('layouts.app')

@section('content')
@include('inc.messages')
<br>
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="form-group">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Name">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="date" name="publish_at" class="form-control" placeholder="Date">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Category:</strong>
            <div>
        	    <input type="text" name="category" class="form-control" placeholder="category">
           </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Image:</strong>
            <div>
              <input type="file" name="image" class="form-control" >
           </div>
        </div>

<br>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content:</strong>
                <textarea class="form-control" style="height:150px" name="content" placeholder="Detail"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>





</form>
@endsection
