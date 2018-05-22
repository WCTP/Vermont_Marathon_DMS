<!-- Navigation -->
<div class="sidenav">
  <h1><a class="navbar-brand" href="/">Vermont Marathon DMS</a></h1>
  <a href="/">Documents</a>
  @if (Auth::check())
  <a class="nav-link" href="/posts/create">Make Document</a>
  <a class="nav-link" href="/admin">{{ Auth::user()->name }}</a>
  @else
  <a class="nav-link" href="/login">Sign In</a>
  @endif
  <div class="search">
    <input type="text" name="search" id="search-box" size="12" placeholder="Search...">
  </div>
</div>

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
          $(".search-results").append('<h1 class="title">Search Results</h1>');
          data.forEach(function(result) {
            $(".search-results").append('<p class="results"><a href="/posts/' + result.id + '">' + result.bib_number + ' | ' + result.first_name + ' ' + result.last_name + ' | IN - ' + result.time_in + ' | OUT - ' + result.time_out + '</a></p>');
          });
        }
      });
    }
  }));
</script>
