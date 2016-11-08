<?php

echo('Сколько будет дважды два?<br>');

function test($a)
{
    switch ($a) {
        case 3:
            echo('Маловато<br>');
            break;
        case 4:
            echo('В точку!<br>');
            break;
        case 5:
            echo('Перебор<br>');
            break;
        default:
            echo('Я таких значений не знаю<br>');
    }
}

test(3); // Маловато
test(4); // В точку!
test(5); // Перебор
test(6); // Я таких значений не знаю
