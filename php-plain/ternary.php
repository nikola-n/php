<?php

//phpinfo();
//replacement for isset()
$page = $_GET['page'] ?? 1;

$page = 1;

$page = isset($_GET['page']) ? $_GET['page'] : 1;

echo $page;

$balance = 10;

$availableBalance = $balance ?: 'zero';

echo 'Your available balance is ' . $availableBalance;