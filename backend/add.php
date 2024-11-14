<?php
    include_once('connection.php');

    if($_POST['todo_name'] == NULL || $_POST['date'] == NULL) {
        header('Location: index.php');
    }

    $new_todo = mysqli_real_escape_string($db, $_POST['todo_name']);
    $new_due = mysqli_real_escape_string($db, date($_POST['date']));
    
    mysqli_query($db, "INSERT INTO todos (todo, due, done) VALUES ('{$new_todo}', '{$new_due}', 0)");
    header('Location: index.php');
?>