<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "ahmidris2030@gmail.com"; // Change to your own email
    $subject = "New Hire Me Request from $name";
    $headers = "From: $name <$email>\r\n";
    $fullMessage = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Application submitted successfully!";
    } else {
        echo "Something went wrong. Try again.";
    }
} else {
    echo "Invalid request";
}
?>
