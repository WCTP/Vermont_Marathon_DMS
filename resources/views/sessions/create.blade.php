@extends('layouts.master')

@section('content')
<!-- Post Content Column -->
<div class="col-lg-8">

  <!-- Title -->
  <h1 class="mt-4">Sign In</h1>

  <div class="card my-4">
    <h5 class="card-header">Login Form:</h5>
    <div class="card-body">
      <form method="POST" action="/login">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Sign In</button>
        </div>
      </form>

      @include ('layouts.errors')

    </div>
  </div>

  <h3 class="mt-4">Don't have an account? Register <a href="/register">here</a>!</h1>

</div>
@endsection
