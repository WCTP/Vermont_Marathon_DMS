<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">Vermont Marathon DMS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <div class="search">
            <input type="text" name="search" id="search-box" size="12" placeholder="Search...">
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/">Documents
            <span class="sr-only">(current)</span>
          </a>
        </li>
        @if (Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="/admin">{{ Auth::user()->name }}</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Sign In</a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>

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
          $(".search-results").append('<h3>Search Results</h3>');
          data.forEach(function(result) {
            $(".search-results").append('<p class="lead"><a href="/posts/' + result.id + '">' + result.bib_number + '</a> | ' + result.first_name + ' ' + result.last_name + ' | IN - ' + result.time_in + ' | OUT - ' + result.time_out + '</p>');
          });
        }
      });
    }
  }));

</script>
