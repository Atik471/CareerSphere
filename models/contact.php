<?php

function dbConnect() {
    return new mysqli('localhost', 'root', '', 'Careersphere', 3306);
}

function saveContact($username, $email, $message) {
    $conn = dbConnect();
    $sql = "INSERT INTO contactus (username, email, message) VALUES ('$username', '$email', '$message')";
    return mysqli_query($conn, $sql);
}

