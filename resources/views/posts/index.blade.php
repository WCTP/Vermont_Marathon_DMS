@extends ('layouts.master')


@section ('content')
  <!-- Post Content Column -->
    <div class="title">All Forms</div>

    @foreach ($posts as $post)
      @include ('posts.post')
    @endforeach

    <br>

@endsection
