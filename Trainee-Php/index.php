<?php
include 'config.php';

$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Blog</title>
</head>
<body>
    <h1>My Simple Blog</h1>
    <a href="add_post.php">Add New Post</a>
    <hr>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
            echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
            echo "<small>Posted on: " . $row['created_at'] . "</small><hr>";
        }
    } else {
        echo "<p>No posts found.</p>";
    }
    ?>
</body>
</html>