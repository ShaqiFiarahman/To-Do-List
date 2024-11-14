<?php
    include_once('controller.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Fadel</title>

    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery.min.js"></script>

</head>
<body>

    <header>
        <nav>
            <h1>Todo</h1>
        </nav>
    </header>

    <div id="add-new">
        <form action="add.php" method="POST">
            <h1>Add New Todo</h1>
            <input type="text" id="todo_name" name="todo_name" placeholder="What to do?" required>
            <input type="date" id="date" name="date" required>
            <button type="submit">Add</button>
            <button type="button" onClick="toggleAddNew()">Cancel</button>
        </form>
    </div>

    <div id="edit-new">
        <form action="update.php" method="POST">
            <h1>Edit Todo</h1>
            <input type="text" id="todo_name" name="todo_name" placeholder="What to do then?" required>
            <input type="date" id="date" name="date" required>
            <button type="submit">Update</button>
            <button type="button" onClick="toggleEditNew(-1)">Cancel</button>
        </form>
    </div>
    <main>

        <section id="todos">

            <?php
                for ($i=0; $i < count($todos); $i++) { 
            
                $id = $todos[$i][0];
                $id_plus = $i + 1;
                $name = $todos[$i][1];
                $due = date($todos[$i][2]);
                $done = intval($todos[$i][3]);

            ?>

            <?php
                $id_temp = $i + 1;
                echo "<div class=\"todo\" id=\"todo-{$id_temp}\">"
            ?>
                <div>
                    <h2>
                        <?php 
                            if($done == 1) {
                                echo "<s>{$name}</s>";
                            } else {
                                echo "{$name}";
                            }
                        ?>
                    </h2>
                    <p>
                        <?php
                            echo "{$due}"
                        ?>
                    </p>
                </div>
                <?php
                    echo <<<EOF
                        <button class="btn-edit" onClick="toggleEdit({$id_plus})">
                            Option
                        </button>
                    EOF;
                ?>
            </div>

            <?php echo "<div class=\"todo-option\" id=\"todo-option-{$id_plus}\">"; ?>
                <?php
                    echo <<<EOF
                        <button onClick="buttonHref('mark.php?id={$id}')">Mark</button>
                        <button onClick="toggleEditNew({$id})">Edit</button>
                        <button onClick="buttonHref('delete.php?id={$id}')">Delete</button>
                    EOF;
                ?>
            </div>

            <?php
                }
            ?>

        </section>
    </main>

    <button class="btn-add" onClick="toggleAddNew()">
            Add New
        </button>
    
    <script src="js/index.js"></script>
</body>
</html>