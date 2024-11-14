<?php
    include_once('connection.php');

    if($_GET['id'] == NULL) {
        header('Location: index.php');
    }

    $result = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM todos WHERE id = {$_GET['id']}"));
    
    if($result == NULL) {
        header('Location: index.php');
    } else {
        mysqli_query($db, "DELETE FROM todos WHERE id = {$_GET['id']}");
        header('Location: index.php');
    }

?>