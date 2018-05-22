
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Document Management System for Vermont City Marathon">
    <meta name="author" content="Walter Proulx">

    <title>VMDMS</title>

    <!-- Complete JavaScript CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- debounce script -->
    <script src="{{ asset('/js/debounce.min.js') }}"></script>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/master.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/blog-post.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/posts.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/nav.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/auth.css') }}" rel="stylesheet">

  </head>

  <body>

    @include ('layouts.nav')

    <div class="main">

      <div class="search-results"></div>

      @yield('content')

    </div>

    @include('layouts.footer')

  </body>

</html>
