<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Save to file (optional)
    $data = "Name: $name | Email: $email | Message: $message" . PHP_EOL;
    file_put_contents("data.txt", $data, FILE_APPEND);

    echo "Form submitted successfully!";
}
?>