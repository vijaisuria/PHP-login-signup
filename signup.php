<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
        include('register.php');
    ?>
    <div class="login-page">
      <div class="form">
        <div class="avatar">
        <img src="https://icons.veryicon.com/png/o/miscellaneous/two-color-icon-library/user-286.png" alt="Avatar">
        <h2>Register</h2>
      </div>
        <form method="post">
          <input type="text" name="full_name" placeholder="Username">
          <input type="email" name="email" placeholder="E-mail">
          <input type="password" name="password" placeholder="Password">
          <button type="submit" name="register">Register</button>
        </form>
        <p class="message">Already registered? <a href="./">Login to your account</a></p>
      </div>
    </div>
  </body>
</html>
