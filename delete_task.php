<?php
include('db.php');

if (isset($_GET['id'])) {
    $task_id = $_GET['id'];

    mysqli_query($db, "DELETE FROM tasks WHERE id = $task_id");
    
    header('Location: index.php');
    exit;
}
?>


