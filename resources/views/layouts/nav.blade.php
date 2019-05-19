<!-- Navigation -->
<div class="top-nav">
  <a href="/">DOCUMENTS</a>
  @if (Auth::check())
  <a class="nav-link" href="/posts/create">NEW ENTRY</a>
  <a class="nav-link" href="/admin">{{ Auth::user()->name }}</a>
  @else
  <a class="nav-link" href="/login">SIGN IN</a>
  @endif
  <a class="nav-link">Search</a>
  <!--<div class="search">
    <input type="text" name="search" id="search-box" size="12" placeholder="Search...">
  </div>-->
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
</script>
