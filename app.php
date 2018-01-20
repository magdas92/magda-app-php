<?php

$words = [
    'amazing',
    'the best',
    'really good at docker',
    'exceptional at puzzles',
    'never angry with Milo',
];

$i = 0;

do {
     $num = rand(0, 4);
     echo sprintf('Magda is %s', $words[$num]) . PHP_EOL;
     sleep(2);
} while (++$i < 1000000);
