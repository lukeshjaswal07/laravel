<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome | Chat App</title>
  @include('includes.links')
</head>
<body>
  <div class="container">
    <h1>Welcome 👋</h1>
    <form method="POST" id="register-form" data-parsley-validate>
        @csrf
      <div class="input-group">
        <label for="username">Username</label>
        <input name="username" type="text" id="username" placeholder="Enter your username" 
        data-parsley-required-message="Username is Mandatory!" 
        data-parsley-pattern="^[a-zA-Z]+$" data-parsley-pattern-message="Only Aplhabets are Allowed!"
         data-parsley-trigger="keyup" 
         required>
      </div>
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
      <div class="input-group">
        <label for="confirm-password">Confirm Password</label>
        <input name="confirm_password" type="password" id="confirm-password" placeholder="Create a password" 
        data-parsley-required-message="Confirm Password is Mandatory!" 
        data-parsley-equalto="#password" data-parsley-equalto-message="Passwords do not match!"  data-parsley-trigger="keyup" 
        required>
      </div>
       <button type="submit" class="btn">Sign Up</button>
    </form>
    <div class="footer-text">
      Already have an account? <a href="{{ url('/login') }}">Login</a>
    </div>
  </div>
</body>
</html>
