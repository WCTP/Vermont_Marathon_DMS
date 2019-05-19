
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

    <div class="site-cover">
      <div class="search-container">
        <div class="search">
          <input type="text" name="search" id="search-box" size="12" placeholder="Search...">
        </div>
        <div class="search-results"></div>
      </div>
    </div>

    <a class="website-header" href="/"><img src="{{ URL::asset('/images/VCM_logo.png') }}"></image>Vermont Marathon DMS</a>

    @include ('layouts.nav')

    <div class="main">

      @yield('content')

    </div>

    @include('layouts.footer')

    <script type="text/javascript">
      /* script for searchbar function */
      $("#search-box").keyup($.debounce(500, function() {
        if ($(this).val() === "") {
          $(".search-results").css("display", "none");
        } else {
          $(".search-results").css("display", "block");
          $(".search-results").empty();
          $.get("/search/" + $("#search-box").val(), function(data) {
            if (data != null) {
              $(".search-results").append('');
              data.forEach(function(result) {
                if (result.time_out == null) {
                  $(".search-results").append('<p class="results"><a href="/posts/'
                  + result.id + '">' + result.bib_number + ' | ' + result.first_name
                  + ' ' + result.last_name + ' | IN - ' + result.time_in
                  + ' | OUT - STILL IN TENT</a></p>');
                } else {
                  $(".search-results").append('<p class="results"><a href="/posts/'
                  + result.id + '">' + result.bib_number + ' | ' + result.first_name
                  + ' ' + result.last_name + ' | IN - ' + result.time_in
                  + ' | OUT - ' + result.time_out + '</a></p>');
                }
              });
            }
          });
        }
      }));

      $("#search-button").on("click", function() {
        $(".site-cover").show();
      });

      $(".site-cover").on("click", function(obj) {
        if (obj.target !== this) {
          return;
        }
        $(".site-cover").hide();
      })
    </script>


  </body>

</html>
