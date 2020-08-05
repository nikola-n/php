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
    <ul class="items">
        <li>
            <span class="item">Pick up shopping</span>
            <a href="#" class="done-button">Mark as done.</a>
        </li>
        <li>
            <span class="item done">Learn PHP</span>
        </li>
    </ul>

    <form class="item-add" action="add.php" method="post">
        <input type="text" name="name" placeholder="Type a new item here." class="input" autocomplete="off" required>
        <button type="submit" value="add" class="submit">Submit</button>
    </form>
</div>
</body>
</html>