
<!doctype html>
<html lang="en">
  <head>

      <title>{{ config('app.name', 'Laravel App') }}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbars/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .custom-scrollbar-js,
      .custom-scrollbar-css {
        height: 450px;
      }



      .custom-scrollbar-css {
        overflow-y: scroll;
      }


      .custom-scrollbar-css::-webkit-scrollbar {
        width: 5px;
      }


      .custom-scrollbar-css::-webkit-scrollbar-track {
        background: #eee;
      }


      .custom-scrollbar-css::-webkit-scrollbar-thumb {
        border-radius: 1rem;
        background-color: #00d2ff;
        background-image: linear-gradient(to top, #00d2ff 0%, #3a7bd5 100%);
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">
  </head>
  <body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Welcome</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample03">

    <ul class="navbar-nav mr-auto">

  @if(Auth::user())
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">

      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Go To</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
          <a class="dropdown-item" href="{{route('posts.create')}}">Create Posts</a>
          <a class="dropdown-item" href="{{route('posts.index')}}">Posts Index</a>


        </div>
      </li>
@endif

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" >Category</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
          <a class="dropdown-item" href="/?category=International">International</a>
          <a class="dropdown-item" href="/?category=Sports">Sports</a>
          <a class="dropdown-item" href="/?category=Bangladesh">Bangladesh</a>
          <a class="dropdown-item" href="/?category=Economy">Economy</a>
          <a class="dropdown-item" href="/?category=Entertainment">Entertainment</a>
          <a class="dropdown-item" href="/?category=Science">Science</a>
          <a class="dropdown-item" href="/?category=Others">Others</a>

        </div>
      </li>

    </ul>

@if(Auth::user())


    <nav class="my-2 my-md-0 mr-md-3">

      <a class="btn btn-sm btn-outline-secondary text-white"  href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
          @csrf
        </form>


@endif

</div>
</nav>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>

<body>
	@yield('content')
</body>
