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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Employer Dashboard</title>
  <link rel="stylesheet" href="../../assets/styles/employer_dashboard/employer_dashboard.css">
</head>
<body>

<main class="main-content">

 
  <section class="cards">
    <div class="card">
      <h3>Total Jobs Posted</h3>
      <p>12</p>
    </div>
    <div class="card">
      <h3>Total Applicants</h3>
      <p>48</p>
    </div>
    <div class="card">
      <h3>Active Jobs</h3>
      <p>5</p>
    </div>
    <div class="card">
      <h3>Interviews Scheduled</h3>
      <p>8</p>
    </div>
  </section>

  <section class="graph-section">
    <h2>Task Roles Over 5 Months</h2>
    <div class="bar-graph">
      <div class="bar" style="height: 70%;">Jan</div>
      <div class="bar" style="height: 90%;">Feb</div>
      <div class="bar" style="height: 50%;">Mar</div>
      <div class="bar" style="height: 80%;">Apr</div>
      <div class="bar" style="height: 60%;">May</div>
    </div>
  </section>

</main>

</body>
</html>
