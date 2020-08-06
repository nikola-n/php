<?php
//Generate random quote

$quotes = [
    [
        'author' => 'Antonie De Saint',
        'text'   => 'A designer knows he has achieved prefection not when there is nothing left to add, but when there is nothing left to take away.',
    ],
    [
        'author' => 'Benjamin Franklin',
        'text'   => 'An investment in knowledge always pays the best interest.',
    ],
    [
        'author' => 'John Updike',
        'text'   => 'Dreams come true. Without that possibility, nature would not incite us to have them',
    ],
    [
        'author' => 'Socrates',
        'text'   => 'The life which is unexamined is not worth living',
    ],
    [
        'author' => 'Aristotle',
        'text'   => 'We cannot learn without pain',
    ],
];

//od arrayot zima random key
//$quote = array_rand($quotes);
//var_dump($quote);




//extract random quote from the list
$quote = $quotes[array_rand($quotes)];
//$quote       = $quotes[rand(0, count($quotes) - 1)];
$quoteText   = $quote['text'];
$quoteAuthor = $quote['author'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Quote</title>
</head>

<body>
    <blockquote>
        <h2>&ldquo;<?= $quoteText ?>&rdquo;</h2>
        <strong>- <?= $quoteAuthor ?></strong>
    </blockquote>
</body>
</html>
