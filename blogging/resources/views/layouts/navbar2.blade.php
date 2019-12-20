
<!doctype html>
<html lang="en">
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


 .custom-scrollbar-js,
 .custom-scrollbar-css {
   height: 500px;
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

      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body >


  <nav class="navbar navbar-expand-sm bg-primary navbar-dark" >

    <ul class="navbar-nav ">
<li class="nav-item active pl-3 pr-5">
  <a class="nav-link" href="/">All</a>
</li>
<li class="nav-item  pr-5">
  <a class="nav-link active" href="/?category=International">International</a>
</li>
<li class="nav-item pr-5">
  <a class="nav-link active" href="/?category=Sports">Sports</a>
</li>
<li class="nav-item pr-5">
  <a class="nav-link active" href="/?category=Bangladesh">Bangladesh</a>
</li>
<li class="nav-item pr-5">
  <a class="nav-link active" href="/?category=Economy">Economy</a>
</li>
<li class="nav-item pr-5">
  <a class="nav-link active" href="/?category=Entertainment">Entertainment</a>
</li>
<li class="nav-item pr-5">
  <a class="nav-link active" href="/?category=Science">Science</a>
</li>
<li class="nav-item pr-5">
  <a class="nav-link active" href="/?category=Others">Others</a>
</li>
</ul>




  <div class=" col-2 d-flex justify-content-end align-items-center">

    @if (Route::has('login'))
        <div class="text-muted text-white">
            @auth
                <a class="btn btn-sm btn-outline-light" href="{{ url('/home') }}">Home</a>
            @else
                <a class="btn btn-sm btn-outline-light" href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a class="btn btn-sm btn-outline-light" href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

  </div>



</header>

  </nav>

@yield('content')
</body>
</html>
