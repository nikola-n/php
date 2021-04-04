<?php
//Convert string to camel case
//My Solution

function toCamelCase($str)
{
    if (strpos($str, '_') !== false) {
        $arr   = explode('_', $str);
        $value = array_map(function ($camel) {
            return ucwords($camel);
        }, $arr);
        return ctype_upper($str{0}) ? implode($value) : lcfirst(implode($value));
    } else if (strpos($str, '-') !== false) {
        $arr   = explode('-', $str);
        $value = array_map(function ($camel) {
            return ucwords($camel);
        }, $arr);
        return ctype_upper($str{0}) ? implode($value) : lcfirst(implode($value));
    }
}

//Other solutions
//
//function toCamelCase($str){
//    return preg_replace_callback("~[_-](\w)~", function($m) { return strtoupper($m[1]); }, $str);
//}

//function toCamelCase($str){
//    $str = str_replace("-", "_",$str);
//    $firstPos = strpos($str, "_");
//    return substr($str,0,$firstPos) . str_replace("_", "",ucwords(substr($str,$firstPos), "_"));
//}

echo toCamelCase("the_stealth_warrior") . '<br>';
echo toCamelCase("The_stealth_warrior") . '<br>';
echo toCamelCase('The-stealtdsh-warrior') . '<br>';
echo toCamelCase('the-stealth-warrior') . '<br>';
echo toCamelCase('the-Stealth-warrior') . '<br>';
echo toCamelCase('thedsa-Stealth-warrior') . '<br>';

function reverse($string)
{

    $length = strlen($string);
    for ($i = ($length - 1); $i >= 0; $i--) {
        echo $string[$i];
    }
}

reverse('Nikola');
echo '<br>';

echo strrev('Nikola');

//Valid braces
echo '<h1>Valid Braces</h1>';

function validBraces($braces)
{

}

function nbYear($p0, $percent, $aug, $p)
{
    $year = 0;
    while ($p0 <= $p) {
        $p0 = $p0 + floor($p0 * ($percent / 100)) + $aug;
        $year++;
    }
    return $year;
}

echo nbYear(1500, 5, 100, 5000);
