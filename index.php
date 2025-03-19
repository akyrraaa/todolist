<?php

include('db.php');

$tasks = mysqli_query($db, "SELECT * FROM tasks WHERE is_completed = 0"); 
$completed_tasks = mysqli_query($db, "SELECT * FROM tasks WHERE is_completed = 1");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Todo List</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body background="bg.jpg">
    <div class="to-do-box">
        <div class="heading">
            <h2> My To-Do List </h2>
            <div class="date"><?=date("m,d,y")?></div>
        </div>

        <form action="add_task.php" method="POST" >
            <input type="text" name="task" class="task-input" placeholder="Add task" required>
            <button type="submit" class="add-button" name="submit">Add</button>
        </form>


        <div class="tasklist">
            <h3>Task List</h3>
            <table>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($tasks)) { ?>
                        <tr>
                            <td class="submit-task"><?php echo $row['task_name']; ?></td>
                            <td class="btn-container">
                                <a href="complete_task.php?id=<?php echo $row['id']; ?>" class="complete-button">Complete</a>
                                <a href="delete_task.php?id=<?php echo $row['id']; ?>" class="delete-button">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </div>
                </tbody>
            </table>
        </div>

        <div class="completedtask-container">
            <h3>Completed Task</h3>
            <table>
                <?php while ($row = mysqli_fetch_array($completed_tasks)) { ?>
                    <tr>
                        <td class="completed-task"><?php echo $row['task_name']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>
