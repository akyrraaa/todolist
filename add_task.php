<?php
include('db.php');

if (isset($_POST['submit'])) {
    $task = $_POST['task'];

    $task = mysqli_real_escape_string($db, $task);

    mysqli_query($db, "INSERT INTO tasks (task_name) VALUES ('$task')");
    
    header('Location: index.php');
    exit;
}
?>


