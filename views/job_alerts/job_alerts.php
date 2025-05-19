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
    <link rel="stylesheet" href="../../assets/styles/global.css" />
    <link rel="stylesheet" href="../../assets/styles/sidebar/sidebar.css" />
    <link rel="stylesheet" href="../../assets/styles/navbar/navbar.css" />
    <link rel="stylesheet" href="../../assets/styles/job_alerts/job_alerts.css" />

    <title>CareerSphere | Job Alerts</title>
  </head>
  <body>
    <div id="alert-container">
      <div id="sidebar" class="sidebar collapsed"></div>
      <main id="main" class="resume">
        <nav id="navbar">Nav</nav>
        <div class="notifications-panel">
          <div class="notifications-header">
            <h2>Job Alerts <span class="unread-count">1</span></h2>
            <span class="mark-all">Mark all as read</span>
          </div>

          <div class="section-title">Today</div>

          <div class="notification">
            <img
              src="/CareerSphere/assets/img/pfp.png"
              class="avatar"
              alt="Avatar"
            />
            <div class="content">
              <div class="title">
                New job posted: Frontend Developer at TechNova
              </div>
              <div class="message">
                We're looking for a React developer with 2+ years of experience.
                Apply now to join our growing team!
              </div>
            </div>
          </div>

          <div class="section-title">Last 7 Days</div>

          <div class="notification">
            <img
              src="/CareerSphere/assets/img/pfp.png"
              class="avatar"
              alt="Avatar"
            />
            <div class="content">
              <div class="title">
                New job posted: Backend Engineer at CloudCore
              </div>
              <div class="message">
                Seeking a Node.js expert to help build scalable microservices.
                Remote-friendly opportunity!
              </div>
            </div>
          </div>

          <div class="notification">
            <img
              src="/CareerSphere/assets/img/pfp.png"
              class="avatar"
              alt="Avatar"
            />
            <div class="content">
              <div class="title">
                New job posted: UI/UX Designer at BrightPixel
              </div>
              <div class="message">
                Join our design team to craft intuitive interfaces for mobile
                and web apps. Portfolio required.
              </div>
            </div>
          </div>

          <div class="notification">
            <img
              src="/CareerSphere/assets/img/pfp.png"
              class="avatar"
              alt="Avatar"
            />
            <div class="content">
              <div class="title">
                New job posted: Data Analyst at Insightify
              </div>
              <div class="message">
                Analyze business data and create insightful dashboards. SQL and
                Python skills preferred.
              </div>
            </div>
          </div>

          <div class="notification">
            <img
              src="/CareerSphere/assets/img/pfp.png"
              class="avatar"
              alt="Avatar"
            />
            <div class="content">
              <div class="title">
                New job posted: DevOps Engineer at NexaTech
              </div>
              <div class="message">
                Help us automate and scale our infrastructure. Experience with
                Docker, Kubernetes, and CI/CD tools required.
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

    <!-- scripts -->
    <script src="../../assets/scripts/globals/mainLayout.js"></script>
    <script src="../../assets/scripts/job_alerts/job_alerts.js"></script>
    <script src="../../assets/scripts/globals/sidebar.js" defer></script>
  </body>
</html>
