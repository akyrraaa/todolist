<?php
$db = mysqli_connect('localhost', 'root', '', 'todo_list');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
