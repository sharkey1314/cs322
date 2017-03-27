@extends ('layout.template')
@section ('content')
<!-- User name box -->
<form method="POST" action="/posts">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="username">User Name</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="User Name" required>
  </div>
  <!-- Password box -->
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required> <!-- required validation -->
  </div>
  <!-- Upload files -->

  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
  </div>
  <!-- Submit button -->
  <button type="submit" class="btn btn-default">Login</button>
</form>
@endsection
