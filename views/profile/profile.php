<?php
session_start();

if (!isset($_SESSION['email'])) {
    // Not logged in, redirect to login
    header("Location: /CareerSphere/views/user_authentication/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- styles -->
    <link rel="stylesheet" href="../../styles/global.css" />
    <link rel="stylesheet" href="../../styles/sidebar/sidebar.css" />
    <link rel="stylesheet" href="../../styles/navbar/navbar.css" />
    <link rel="stylesheet" href="../../styles/profile/profile.css" />

    <title>CareerSphere | Profile</title>
  </head>
  <body>
    <div id="profile-container">
      <div id="sidebar" class="sidebar collapsed"></div>
      <main id="main" class="profile">
        <nav id="navbar">Nav</nav>
        <div class="profile-header">
          <div class="pfp">
            <img src="/CareerSphere/assets/img/pfp.png" alt="Profile picture" />
          </div>
          <div class="profile-info">
            <h1 class="profile-name">Atikur Rahman</h1>
            <p class="profile-bio">Web Developer | Tech Enthusiast</p>
          </div>
        </div>
        <div class="info-container">
        <h2 class="section-title">Contact Information</h2>
        <div class="info-item">
            <div class="info-label">Phone:</div>
            <div class="info-value">+880 192 2828 222</div>
        </div>
        <div class="info-item">
            <div class="info-label">Address:</div>
            <div class="info-value">
                Rampura<br>
                Dhaka, Bangladesh<br>
            </div>
        </div>
        <div class="info-item">
            <div class="info-label">E-mail:</div>
            <div class="info-value"><a href="#">atik@gmail.com</a></div>
        </div>
        <div class="info-item">
            <div class="info-label">Site:</div>
            <div class="info-value"><a href="#" target="_blank">www.atikur.com</a></div>
        </div>

        <h2 class="section-title" style="margin-top: 20px;">Basic Information</h2>
        <div class="info-item">
            <div class="info-label">Birthday:</div>
            <div class="info-value">October 12, 2002</div>
        </div>
        <div class="info-item">
            <div class="info-label">Gender:</div>
            <div class="info-value">Male</div>
        </div>
    </div>
      </main>
      
    </div>

    <!-- scripts -->
    <script src="../../scripts/globals/mainLayout.js"></script>
    <script src="../../scripts/profile/profile.js"></script>
    <script src="../../scripts/globals/sidebar.js" defer></script>
  </body>
</html>
