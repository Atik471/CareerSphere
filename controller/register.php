<?php
require_once '../models/register.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        die("Please fill in all fields.");
    }

    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    if (userExists($email)) {
        die("User already exists with this email.");
    }

    if (registerUser($username, $email, $password)) {
        header('Location: ../views/user_authentication/login.php');
    } else {
        echo "Error while registering user.";
    }
} else {
    header('Location: ../views/user_authentication/register.php');
    exit;
}
