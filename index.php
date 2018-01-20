<html>

<head>

<title> Random word </title>

</head>

<?php

$words = [
    'bird',
    'dog',
    'sky',
    'million',
    'google',
    'weather',
    'rain',
    'cat',
];

echo '<h1>Hello welcome to the random word generator</h1>' . PHP_EOL;

echo sprintf('<p>Your random word is %s.</p>', $words[rand(0, (count($words)-1))]) . PHP_EOL;

?>

</html>
