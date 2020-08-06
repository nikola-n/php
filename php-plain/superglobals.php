<?php

//everything you pass in the server side you can access with
//$_GET array superglobal
//var_dump($_GET['page']);

if (isset($_GET['search']) && isset($_GET['page'])) {

    $searchTerm = $_GET['search'];

    echo '<h3>Searching for: ' . $searchTerm . '</h3>';

    $page = $_GET['page'];

    $pages = 10;

    echo '<p> You are on page ' . $page . '</p>';

    for ($i = 1; $i <= $pages; $i++) {
        echo '<a href="?search=' . $searchTerm . '&page=' . $i . '">' . $i . ' </a>';
    }
}
//$_POST for forms hide the data from url