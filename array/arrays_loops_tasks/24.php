<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 15.10.2017
 * Time: 21:33
 */
//Вам нужно разработать программу, которая считала бы количество вхождений
//какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
//442158755745 встречается 4 раза.

$a = 442158755745;
$count = 0;
for ($i=1; $i<=strlen($a); $i++) {
    if ($i == 5){
        $count++;
    }
}
echo "Цифра 5 встречается ".$count." раз ";