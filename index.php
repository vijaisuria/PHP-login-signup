<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
    include('login.php')
    ?>
    <div class="login-page">
      <div class="form">
      <div class="avatar">
        <img src="https://icons.veryicon.com/png/o/miscellaneous/two-color-icon-library/user-286.png" alt="Avatar">
      </div>
        <h2>Login</h2>
        <form method="post">
          <input type="text" name="email" placeholder="Username">
          <input type="password" name="password" placeholder="Password">
          <button type="submit" name="login">Log in</button>
        </form>
        <p class="message">Not registered? <a href="./signup.php">Create an account</a></p>
        <p class="message">Forgot your password? <a href="#">Click here to reset it</a></p>
      </div>
    </div>
  </body>
</html>
