<!-- Sidebar Widgets Column -->
<div class="col-md-4">

  <br>

  <!-- Code Widget -->
  <div class="row">
    <div class="col">
      <div class="canvas">
        <h1 class="header">Search</h1>
          <ul>
            <li><input type="text" id="search-box" name="search" value="" placeholder="Search..."></li>
          </ul>
      </div>
    </div>
  </div>

  <br>

</div>

<script type="text/javascript">

  // $("#search-box").keyup($.debounce(500, function () {
  //         if ($(this).val() === "") {
  //             $(".search-results").css("display", "none");
  //         } else {
  //             $(".search-results").empty();
  //             $.get("/search/" + $("#search-box").val(), function (data) {
  //                 console.log(data);
  //                 if (data.length != 0) {
  //                     var parsedData = data
  //                     console.log(parsedData);
  //                     $.each(parsedData, function () {
  //                         var start_pos = this.indexOf('/') + 1;
  //                         var end_pos = this.indexOf('/',start_pos);
  //                         var type = this.substring(start_pos,end_pos);
  //                         type = type.charAt(0).toUpperCase() + type.slice(1);
  //                         var text = this.substring(this.lastIndexOf("/") + 1, this.length);
  //                         var found = $(".search-results:contains("+ text +")");
  //                         if (found != null) {
  //                             $(".search-results").append('<li><a href="' + this + '"><span class="search-results-text">' + text + '</span><span class="search-results-sub-text">' + type + '</span></a></li>')
  //                         }
  //                     });
  //                 } else {
  //                         $(".search-results").append('<li><span class="search-results-text">No Search Results</span></li>')
  //                 }
  //             });
  //             $(".search-results").css("display", "block");
  //         }
  //     }));

</script>
