<?php

require_once 'app/init.php';

$itemsQuery = $db->prepare("
SELECT id, name, done FROM items WHERE user = :user
");

$itemsQuery->execute([
    'user' => $_SESSION['user_id'],
]);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>To do</title>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="list">
    <h1 class="header">To do.</h1>
    <?php if ( ! empty($items)): ?>
        <ul class="items">
        <?php foreach ($items as $item): ?>
            <li>
                <span class="item<?php echo $item['done'] ? ' done' : '' ?>"><?= $item['name'] ?></span>
                <?php if ( ! $item['done']): ?>
                    <a href="mark.php?as=done&item=<?php echo $item['id']?>" class="done-button">Mark as done.</a>
                <?php else: ?>
                    <a href="mark.php?as=notdone&item=<?php echo $item['id']?>" class="done-button">Mark as not done.</a>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    <?php else: ?>
        <p>You haven't added any items yet.</p>
        </ul>
    <?php endif; ?>

    <form class="item-add" action="add.php" method="post">
        <input type="text" name="name" placeholder="Type a new item here." class="input" autocomplete="off" required>
        <button type="submit" value="add" class="submit">Add</button>
    </form>
</div>
</body>
</html>