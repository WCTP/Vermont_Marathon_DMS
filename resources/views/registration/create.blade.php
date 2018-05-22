@extends ('layouts.master')

@section ('content')
  <!-- Title -->
  <div class="auth-container">
    <h1 class="mt-4">Register</h1>
  </div>

  <form method="POST" action="/register">
    {{ csrf_field() }}

    <div class="auth-container">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="auth-container">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="auth-container">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>

    <div class="auth-container">
      <label for="password_confirmation">Password Confirmation:</label>
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
    </div>

    <div class="auth-container">
      <button type="submit" class="post-show-edit-button">Sign Up</button>
    </div>
  </form>

  @include ('layouts.errors')
@endsection
