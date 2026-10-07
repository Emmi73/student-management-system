<?php
  include("authe_layout.html");
?>

<div class="main">
  <div id="auth-title">
    <h2>Register</h2>
  </div>

  <form>
    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="password">Create Password:</label>
    <input type="password" id="password" name="password" required><br>
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required><br>
    <input  id="register-btn" type="submit" value="Register">
  </form>

  <div id="auth-footer">
    If you have an account, <a href="login.php">Login</a>
  </div>
</div>