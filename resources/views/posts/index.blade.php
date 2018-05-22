@extends ('layouts.master')


@section ('content')
  <!-- Post Content Column -->
    <h1 class="title">All Forms</h1>

    @foreach ($posts as $post)
      @include ('posts.post')
    @endforeach

    <br>

@endsection
