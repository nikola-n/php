<?php
//Convert string to camel case
//My Solution
//
//function toCamelCase($str)
//{
//    if (strpos($str, '_') !== false) {
//        $arr   = explode('_', $str);
//        $value = array_map(function ($camel) {
//            return ucwords($camel);
//        }, $arr);
//        return ctype_upper($str{0}) ? implode($value) : lcfirst(implode($value));
//    } else if (strpos($str, '-') !== false) {
//        $arr   = explode('-', $str);
//        $value = array_map(function ($camel) {
//            return ucwords($camel);
//        }, $arr);
//        return ctype_upper($str{0}) ? implode($value) : lcfirst(implode($value));
//    }
//}

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

//echo toCamelCase("the_stealth_warrior") . '<br>';
//echo toCamelCase("The_stealth_warrior") . '<br>';
//echo toCamelCase('The-stealtdsh-warrior') . '<br>';
//echo toCamelCase('the-stealth-warrior') . '<br>';
//echo toCamelCase('the-Stealth-warrior') . '<br>';
//echo toCamelCase('thedsa-Stealth-warrior') . '<br>';
//
//function reverse($string)
//{
//
//    $length = strlen($string);
//    for ($i = ($length - 1); $i >= 0; $i--) {
//        echo $string[$i];
//    }
//}
//
//reverse('Nikola');
//echo '<br>';
//
//echo strrev('Nikola');
//
////Valid braces
//echo '<h1>Valid Braces</h1>';
//
//function validBraces($braces)
//{
//
//}
//
//function nbYear($p0, $percent, $aug, $p)
//{
//    $year = 0;
//    while ($p0 <= $p) {
//        $p0 = $p0 + floor($p0 * ($percent / 100)) + $aug;
//        $year++;
//    }
//    return $year;
//}

//echo nbYear(1500, 5, 100, 5000);

// split and extract numbers to array when you find letter in the string
//P52I2211M599 => [
//                      P => 52,
//                      I => 2211,
//                      M => 599
//                ];

function extractValues($string)
{
    //$indexes   = [];
    //
    //foreach (str_split($string) as $char) {
    //    if ( ! is_numeric($char)) {
    //        $indexes[] = $char;
    //    }
    //}

    $delimiter = range("A", "Z");
    $chars     = implode($delimiter);
    return $arrValues = preg_split("/[$chars]+/", $string, -1, PREG_SPLIT_NO_EMPTY);
}

function extractNumbers($string)
{
    //$array = [];
    ////$string = "P52I2211M599";
    //preg_match_all("/[A-Z]\d+/", $string, $matches);
    //
    //foreach ($matches[0] as $value) {
    //    $array[substr($value, 0, 1)] = substr($value, 1);
    //}

    //return $array;
    //    $delimiter = range("A", "Z");
    //    $chars  = implode($delimiter);
    //    $arrValues = preg_split("/[$chars]+/", $string, -1, PREG_SPLIT_NO_EMPTY);
    //    //
    //    return array_combine(array_filter(array_map(function($value){
    //        if(!is_numeric($value)){
    //            return $value;
    //        }
    //    }, str_split($string))), $arrValues);
    //}
    //
    //var_dump(extractNumbers('P52I2211M599'));
    ////var_dump(extractNumbers('P52I2211M599'));
    //
    //$string = "PZ52I2211M599";
    //
    //$array = [];
    //preg_match_all("/[A-Z]*\d+/", $string, $matches);
    //
    //foreach ($matches[0] as $value) {
    //    $charCount = 0;
    //
    //    foreach (str_split($value) as $char) {
    //        if ( ! is_numeric($char)) {
    //            $charCount++;
    //        }
    //    }
    //
    //    $array[substr($value, 0, $charCount)] = substr($value, $charCount);
    //}

}

function refactorArray($array)
{
    $new = [];

    foreach ($array as $key => $arr) {
        foreach ($arr as $k => $v) {
            if ( ! is_null($v)) {
                $new[$key][$k] = $v;
            }else {
                continue;
            }
        }
        return $new;

    }
}

$array = [
    [
        'name'   => 'name',
        'string' => 'string',
        'foo'    => 'bar',
    ],
    [
        'name'   => null,
        'string' => 'string',
        'foo'    => null,
    ],
    [
        'name'   => 'name',
        'string' => 'string',
        'foo'    => 'bar',
    ],
    [
        'name'   => 'name',
        'string' => null,
        'foo'    => 'bar',
    ],
    [
        'name'   => 'name',
        'string' => null,
        'foo'    => null,
    ],
    [
        'name'   => 'name',
        'string' => null,
        'foo'    => 0,
    ],
];
var_dump(refactorArray($array));