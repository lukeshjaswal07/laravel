<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome | Chat App</title>
  @include('includes.links')
</head>
<body>
  <div class="container" style="height: 70%;">
    <h1>Welcome 👋</h1>
    <form method="POST" id="login-form" data-parsley-validate>
        @csrf

      <div class="input-group">
        <label for="email">Email</label>
        <input name="email" type="email" id="email" placeholder="Enter your email" 
        data-parsley-required-message="Email is Mandatory!"  data-parsley-trigger="keyup" 
        required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input name="password" type="password" id="password" placeholder="Create a password" 
        data-parsley-required-message="Password is Mandatory!"  data-parsley-trigger="keyup" 
        required>
      </div>
       <button type="submit" class="btn">Login</button>
    </form>
    <div class="footer-text">
      Not have an account? <a href="{{ url('/') }}">Register!</a>
    </div>
  </div>
</body>
</html>
