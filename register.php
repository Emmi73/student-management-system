<?php
  include("authe_layout.html");
?>

<div class="main">
  <div id="auth-title">Register</div>
  <form>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>
    <input type="submit" value="Register">
  </form>
  <div id="auth-footer">If you have an account, <a href="login.php">Login</a></div>
</div>