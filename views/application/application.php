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
    <link rel="stylesheet" href="../../styles/application/application.css" />

    <title>CareerSphere | Application</title>
  </head>
  <body>
    <div id="application-container">
      <div id="sidebar" class="sidebar collapsed"></div>
      <main id="main" class="resume">
        <nav id="navbar">Nav</nav>
        <div class="application-status-card">
          <h3>Application Status</h3>
          <ul class="status-steps">
            <li class="step active">
              <div class="step-number">1</div>
              <div class="step-content">
                <div class="step-title">Under review</div>
                <div class="step-description">
                  Your application is currently under review. We will notify you
                  once we have an update.
                </div>
                <button class="complete-task">View my application →</button>
              </div>
            </li>
            <li class="step">
              <div class="step-number">2</div>
              <div class="step-content">
                <div class="step-title">Initial approval</div>
              </div>
            </li>
            <li class="step">
              <div class="step-number">3</div>
              <div class="step-content">
                <div class="step-title">Job Task</div>
              </div>
            </li>
            <li class="step">
              <div class="step-number">4</div>
              <div class="step-content">
                <div class="step-title">Final Interview</div>
              </div>
            </li>
          </ul>
        </div>
      </main>
    </div>

    <!-- scripts -->
    <script src="../../scripts/globals/mainLayout.js"></script>
    <script src="../../scripts/application/application.js"></script>
    <script src="../../scripts/globals/sidebar.js" defer></script>
  </body>
</html>
