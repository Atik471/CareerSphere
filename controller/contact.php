<?php
require_once '../models/contact.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (!$fullname || !$email || !$message) {
        die("All fields are required.");
    }

    if (saveContact($fullname, $email, $message)) {
        echo "Message sent!";
    } else {
        echo "Something went wrong.";
    }
} else {
    header("Location: ../views/contact_us/contact_us.php");
    exit;
}
