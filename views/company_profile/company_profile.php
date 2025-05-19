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
  <title>Company Profile</title>
 <link rel="stylesheet" href="../../styles/company_profile/company_profile.css">
</head>
<body>

<div class="profile-container">
  <img src="../../assets/img/company_profile.jpeg" alt="Company Logo" class="profile-picture">

  <div class="company-name">CAREER_SPHERE</div>
  <div class="company-description">
    We are pioneers in AI-driven solutions, offering custom software development and tech consultancy worldwide.
  </div>
  <div class="company-category">Technology</div>

  <div class="employees-section">
    <h3>Employees</h3>
    
    <div class="employee">
      <div class="employee-name">Pritom Sarker</div>
      <div class="employee-buttons">
        <button class="remove">Remove</button>
      </div>
    </div>

    <div class="employee">
      <div class="employee-name">Atikur Rahman</div>
      <div class="employee-buttons">
        <button class="remove">Remove</button>
      </div>
    </div>

    <div class="employee">
      <div class="employee-name">Priyo</div>
      <div class="employee-buttons">
        <button class="remove">Remove</button>
      </div>
    </div>
  </div>

  <div class="add-employee">
    <button>Add Employee</button>
  </div>
</div>

</body>
</html>
