<?php

function dbConnect() {
    return new mysqli('localhost', 'root', '', 'Careersphere', 3307);
}

function verifyUser($email, $password) {
    $conn = dbConnect();
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    
    return mysqli_num_rows($result) === 1;
}
