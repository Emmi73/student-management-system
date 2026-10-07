<?php
  include("authe_layout.html");
?>
<link rel="stylesheet" href="style.css">
<div class="main">
  <div id="auth-title">
    <h2>Login</h2>
  </div>

  <form>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>
    <input type="submit" value="Login">
  </form>

  <div id="auth-footer">
    If you don't have an account, <a href="register.php">Register</a>
  </div>
</div>