<?php

function dbConnect() {
    return new mysqli('localhost', 'root', '', 'Careersphere', 3307);
}

function userExists($email) {
    $conn = dbConnect();
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    return mysqli_num_rows($result) > 0;
}

function registerUser($username, $email, $password) {
    $conn = dbConnect();
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    return mysqli_query($conn, $sql);
}
