<?php
include('db.php');

if (isset($_GET['id'])) {
    $task_id = $_GET['id'];

    mysqli_query($db, "UPDATE tasks SET is_completed = 1 WHERE id = $task_id");
    
    header('Location: index.php');
    exit;
}
?>
