<?php

/** require - require_once - include - include_once */
ob_start();
require "nav.php";
$nav = ob_get_clean();
$nav = str_replace('About', 'About Us', $nav);
var_dump($nav);
echo $nav;