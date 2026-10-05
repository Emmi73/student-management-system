<?php
  include("authe_layout.html");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <div class="main">
    <div id="auth-title">
      Login
    </div>
  
    <form>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br>
      <input type="submit" value="Login">
    </form>
  
    <div id="auth-footer">
      If you don't have an account, <a href="register.php">Register</a></div>
  </div>
  
</body>
</html>