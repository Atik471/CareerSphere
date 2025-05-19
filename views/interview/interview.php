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
    <link rel="stylesheet" href="../../styles/interview/interview.css" />

    <title>CareerSphere | Interview</title>
  </head>
  <body>
    <div id="interview-container">
      <div id="sidebar" class="sidebar collapsed"></div>
      <main id="main" class="profile">
        <nav id="navbar">Nav</nav>
        <div class="container">
          <div class="calendar-container">
            <div class="calendar-header">
              <button id="prevMonth">&lt;</button>
              <h3 id="monthYear"></h3>
              <button id="nextMonth">&gt;</button>
            </div>
            <div class="calendar-grid" id="calendarGrid"></div>
            <div class="timezone">GMT-06:00 Bangladesh/Dhaka</div>
          </div>
          <div class="slots">
            <div class="slot">
              <span class="time">10:00 am - 10:30 am</span>
            </div>
            <div class="slot">
              <span class="time">10:30 am - 11:00 am</span>
            </div>
            <div class="slot selected">
              <span class="time">11:00 am</span>
              <button class="confirm-btn">Confirm</button>
            </div>
            <div class="slot">
              <span class="time">11:30 am - 12:00 pm</span>
            </div>
            <div class="slot">
              <span class="time">12:00 pm - 12:30 pm</span>
            </div>
          </div>
        </div>
      </main>
    </div>

    <!-- scripts -->
    <script src="../../scripts/globals/mainLayout.js"></script>
    <script src="../../scripts/interview/interview.js"></script>
    <script src="../../scripts/globals/sidebar.js" defer></script>
  </body>
</html>
