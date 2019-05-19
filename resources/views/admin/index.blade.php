@extends ('layouts.master')


@section ('content')
<!-- Post Content Column -->
<div class="admin-option">
  <h1>Options</h1>
  <ul>
    <li>
      <a href="/posts/create">New Form</a>
    </li>
    <li>
      <a href="#">HTML</a>
    </li>
    <li>
      <a href="/logout">Sign Out</a>
    </li>
  </ul>

  <h1 class="card-header">Your Forms</h1>
  @foreach ($posts as $post)

    @include ('admin.post')

    <hr>

  @endforeach
</div>
@endsection
