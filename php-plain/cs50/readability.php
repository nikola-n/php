<?php

function text(string $text)
{
    $letters   = 0;
    $spaces    = 0;
    $sentences = 0;

    for ($i = 0; $i < strlen($text); $i++) {
        if (ctype_alpha($text[$i])) {
            $letters++;
        }
        if (($text[$i] == '!') || ($text[$i] == '.') || ($text[$i] == '?')) {
            $sentences++;
        }
        if (ctype_space($text[$i])) {
            $spaces++;
            $words = $spaces + 1;
        }
    }

var_dump($letters, $sentences, $words);
    $index = round(formula($letters, $sentences, $words));

    if ($index < 1) {
        return 'Before Grade 1';
    } else if ($index > 16) {
        return 'Grade 16+';
    } else {
        return 'Grade ' . $index;
    }
}

function formula($letters, $sentences, $words)
{
    $L = $letters * 100 / $words;
    $S = $sentences * 100 / $words;

    return 0.0588 * $L - 0.296 * $S - 15.8;
}
echo text('One fish. Two fish. Red fish. Blue fish.');

