@extends('layouts.master')

@section('content')
  <!-- Title -->
  <div class="auth-container">
    <h1 class="mt-4">Sign In</h1>
  </div>

  <form method="POST" action="/login">
    {{ csrf_field() }}

    <div class="auth-container">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>

    <div class="auth-container">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>

    <div class="auth-container">
      <button type="submit" class="post-show-edit-button">Sign In</button>
    </div>
  </form>

  @include ('layouts.errors')

  <div class="auth-container">
    <h3 class="">Don't have an account? Register <a href="/register">here</a>!</h3>
  </div>
@endsection
