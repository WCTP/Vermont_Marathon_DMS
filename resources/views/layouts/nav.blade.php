<!-- Navigation -->
<div class="top-nav">
  <a href="/">DOCUMENTS</a>
  @if (Auth::check())
  <a class="nav-link" href="/posts/create">NEW ENTRY</a>
  <a class="nav-link" href="/admin">{{ Auth::user()->name }}</a>
  @else
  <a class="nav-link" href="/login">SIGN IN</a>
  @endif
  <button id="search-button" class="nav-link" href="">SEARCH</a>
</div>
