<?php
$name = $email = $password = $confirm_password = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Name
    if (empty($_POST["name"])) {
        $errors["name"] = "Name is required";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
    }

    // Email
    if (empty($_POST["email"])) {
        $errors["email"] = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
    }

    // Password
    if (empty($_POST["password"])) {
        $errors["password"] = "Password is required";
    } elseif (strlen($_POST["password"]) < 6) {
        $errors["password"] = "Password must be at least 6 characters";
    } else {
        $password = $_POST["password"];
    }

    // Confirm Password
    if (empty($_POST["confirm_password"])) {
        $errors["confirm_password"] = "Confirm your password";
    } elseif ($_POST["confirm_password"] != $_POST["password"]) {
        $errors["confirm_password"] = "Passwords do not match";
    } else {
        $confirm_password = $_POST["confirm_password"];
    }

    // Success
    if (empty($errors)) {
        echo "<h3 style='color:green;'>Registration Successful!</h3>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="POST" action="">
    
    Name:
    <input type="text" name="name" value="<?php echo $name; ?>">
    <span style="color:red;"><?php echo $errors['name'] ?? ''; ?></span>
    <br><br>

    Email:
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span style="color:red;"><?php echo $errors['email'] ?? ''; ?></span>
    <br><br>

    Password:
    <input type="password" name="password">
    <span style="color:red;"><?php echo $errors['password'] ?? ''; ?></span>
    <br><br>

    Confirm Password:
    <input type="password" name="confirm_password">
    <span style="color:red;"><?php echo $errors['confirm_password'] ?? ''; ?></span>
    <br><br>

    <input type="submit" value="Register">

</form>

</body>
</html>