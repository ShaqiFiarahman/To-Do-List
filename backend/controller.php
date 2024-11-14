<?php

include_once('connection.php');

$db_result =  mysqli_query($db, "SELECT * FROM todos ORDER BY due");
$todos = [];

while($todo = mysqli_fetch_array($db_result)) {
    array_push($todos, $todo);
}

?>