@extends ('layouts.master')


@section ('content')
  <!-- Post Content Column -->
    <h1 class="mt-4">&nbsp&nbsp All Forms</h1>

    <br>

    @foreach ($posts as $post)
    <div class="row">
      <div class="col">
        <div class="canvas">
          @include ('posts.post')
        </div>
      </div>
    </div>

    <br>
    @endforeach

    <br>

@endsection
