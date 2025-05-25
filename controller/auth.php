<?php
session_start();
require_once '../models/login.php';

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password)) {
    header("Location: /CareerSphere/views/user_authentication/login.php");
    exit;
}

if (verifyUser($email, $password)) {
    $_SESSION['email'] = $email;
    header("Location: /CareerSphere/views/profile/profile.php");
    exit;
} else {
    header("Location: /CareerSphere/views/user_authentication/login.php");
    exit;
}
