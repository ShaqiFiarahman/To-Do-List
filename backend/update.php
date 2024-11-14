<?php

    include_once('connection.php');

    if($_POST['todo_name'] == NULL || $_POST['date'] == NULL || $_GET['id'] == NULL) {
        header('Location: index.php');
    }

    $new_todo = mysqli_real_escape_string($db, $_POST['todo_name']);
    $new_due = mysqli_real_escape_string($db, date($_POST['date']));

    mysqli_query($db, "UPDATE todos SET todo = '$new_todo', due = '$new_due' WHERE id = {$_GET['id']}");
    header('Location: index.php');

?>