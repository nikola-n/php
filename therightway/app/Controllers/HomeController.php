<?php

namespace TheRightWay\App\Controllers;

class HomeController
{
    public function index()
    {
        $_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;

        setcookie(
            'userName',
            'Nikola',
            time() + 10
        );
        return 'Echo home';
    }
}