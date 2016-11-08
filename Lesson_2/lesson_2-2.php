<?php

$header = 'Добро пожаловать на сайт!';
$time = date('H');

if ($time >= 0 && $time < 6) {
    $greeting = 'Доброй ночи!';
}
if ($time >= 6 && $time < 12) {
    $greeting = 'Доброе утро!';
}
if ($time >= 12 && $time < 18) {
    $greeting = 'Добрый день!';
}
if ($time >= 18 && $time < 24) {
    $greeting = 'Добрый вечер!';
}

echo "<h1>$header</h1>";
echo "<p>$greeting</p>";