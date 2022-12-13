<?php

$xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container">
        <?php

        foreach ($xml->item as $item) {
        ?>
            <div class="task-card">
                <span class="task-card-name"><?= $item->name ?></span>
                <span class="task-card-assignedTo"><?= $item->assignedTo ?></span>
                <span class="task-card-deadline"><?= $item['deadline'] ?></span>
                <a href="delete.php?id=<?= $item['id']?>">Удалить</a>
            </div>
        <?php
        }

        ?>
       
    </div>
</body>

</html>