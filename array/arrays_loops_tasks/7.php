<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 08.10.2017
 * Time: 21:53
 */
//Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
//выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.

$array = [2, 5, 9, 15, 0, 4];

foreach ($array as $value){
    if ($value > 3 && $value < 10){
        echo $value. '<br>';
    }
}