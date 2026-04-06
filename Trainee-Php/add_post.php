<?php
include 'config.php';

$message = "";

if (isset($_POST['title']) && isset($_POST['content'])) {
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);

    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    if ($conn->query($sql)) {
        $message = "Post added successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Blog Post</title>
</head>
<body>
    <h2>Add New Post</h2>
    <form method="POST" action="">
        Title: <input type="text" name="title" required><br><br>
        Content: <textarea name="content" rows="5" cols="40" required></textarea><br><br>
        <input type="submit" value="Add Post">
    </form>
    <p style="color:green;"><?php echo $message; ?></p>
    <a href="index.php">View All Posts</a>
</body>
</html>