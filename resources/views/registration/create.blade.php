@extends ('layouts.master')

@section ('content')
  <!-- Post Content Column -->
  <div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4">Register</h1>

    <div class="card my-4">
      <h5 class="card-header">Registration Form:</h5>
      <div class="card-body">
        <form method="POST" action="/register">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>

          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>

          <div class="form-group">
            <label for="password_confirmation">Password Confirmation:</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Sign Up</button>
          </div>
        </form>

        @include ('layouts.errors')

      </div>
    </div>

  </div>
@endsection
