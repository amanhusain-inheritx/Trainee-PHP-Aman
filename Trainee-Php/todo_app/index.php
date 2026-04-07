<?php
$file = "tasks.txt";

// Load tasks
$tasks = file_exists($file) ? file($file, FILE_IGNORE_NEW_LINES) : [];

// Add task
if (isset($_POST['add'])) {
    $task = trim($_POST['task']);
    if (!empty($task)) {
        file_put_contents($file, $task . PHP_EOL, FILE_APPEND);
    }
    header("Location: index.php");
    exit();
}

// Delete task
if (isset($_GET['delete'])) {
    $index = $_GET['delete'];
    if (isset($tasks[$index])) {
        unset($tasks[$index]);
        file_put_contents($file, implode(PHP_EOL, $tasks) . PHP_EOL);
    }
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP To-Do App</title>
    <style>
        body { font-family: Arial; max-width: 500px; margin: 40px auto; }
        input[type=text] { width: 70%; padding: 8px; }
        button { padding: 8px; }
        li { margin: 10px 0; }
        a { color: red; margin-left: 10px; text-decoration: none; }
    </style>
</head>
<body>

<h2>📝 To-Do List</h2>

<form method="POST">
    <input type="text" name="task" placeholder="Enter task..." required>
    <button type="submit" name="add">Add</button>
</form>

<ul>
<?php foreach ($tasks as $index => $task): ?>
    <li>
        <?= htmlspecialchars($task) ?>
        <a href="?delete=<?= $index ?>">❌</a>
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>