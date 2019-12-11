
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
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>

    <div class="m-2">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">

      </div>
      <div class="col-4 text-center">

      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">

        @if (Route::has('login'))
            <div class="text-muted">
                @auth
                    <a class="btn btn-sm btn-outline-secondary" href="{{ url('/home') }}">Home</a>
                @else
                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

      </div>
    </div>

    </div>
  </header>


<div class="m-4">

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="/">All</a>
      <a class="p-2 text-muted" href="/?category=International">International</a>
      <a class="p-2 text-muted" href="/?category=Sports">Sports</a>
      <a class="p-2 text-muted" href="/?category=Bangladesh">Bangladesh</a>
      <a class="p-2 text-muted" href="/?category=Economy">Economy</a>
      <a class="p-2 text-muted" href="/?category=Entertainment">Entertainment</a>
      <a class="p-2 text-muted" href="/?category=Science">Science</a>
      <a class="p-2 text-muted" href="/?category=Others">Others</a>

    </nav>
  </div>
<hr>
@yield('content')
</body>
</html>
