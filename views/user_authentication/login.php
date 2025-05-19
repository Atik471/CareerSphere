<?php
session_start();
if (isset($_SESSION['email'])) {
  // echo "<p>Succesful</p>";
  header('Location: /CareerSphere/views/profile/profile.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../assets/styles/global.css" />
  <link
    rel="stylesheet"
    href="../../assets/styles/user_authentication/user_authentication.css" />
  <title>CareerSphere | Login</title>
</head>

<body>
  <section class="auth_section">
    <h1 class="auth_nav"><a href="/CareerSphere/views/jobs/jobs.html">CareerSphere</a></h1>
    <div class="auth_container">
      <div class="auth_header">
        <h2>Login</h2>
        <p>
          or <a href="./register.html" class="auth_link">create an account</a>
        </p>
      </div>
      <form id="login-form" action="/CareerSphere/controller/auth.php" method="POST" enctype="">
        <div class="auth_input_container">
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Email"
            class="auth_input" />
        </div>
        <p id="email-error" class="error_msg"></p>
        <br />
        <div class="auth_input_container">
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Password"
            class="auth_input" />
          <img
            src="../../assets/img/eye_show.png"
            alt="toggle icon"
            class="toggle_icon"
            id="toggle_icon"
            onclick="togglePasswordVisibility()" />
        </div>
        <p id="password-error" class="error_msg"></p>
        <br />
        <button type="submit" class="auth_submit">Login</button>
        <?php
        if (isset($_GET['error'])) {
          echo "<p style='color:red;'>Invalid username or password</p>";
        }
        ?>
      </form>
      <p>
        <a href="./forgotten_password.html" class="auth_link">Forgotten your password?
        </a>
      </p>
    </div>
  </section>

  <script src="../../assets/scripts/user_authentication/login.js"></script>
  <script src="../../assets/scripts/user_authentication/toggle_password.js"></script>
</body>

</html>