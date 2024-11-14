<?php
    include_once('connection.php');
    $result = mysqli_fetch_array(mysqli_query($db, "SELECT done FROM todos WHERE id = {$_GET['id']}"));
    
    if($result == NULL) {
        header('Location: index.php');
    } else {
        $new_done = ((int)$result['done'] == 0)? 1 : 0;
        mysqli_query($db, "UPDATE todos SET done = {$new_done} WHERE id = {$_GET['id']}");
        header('Location: index.php');
    }

?>