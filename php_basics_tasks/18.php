<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 08.10.2017
 * Time: 13:21
 */

//<p>18. Создайте две переменные $a = '78' (строковый тип) и $b = 78 (целочисленный тип). Проверьте эти две переменные на эквивалентность, с помощью if выведите "эквивалентны" или "не эквивалентны".</p>

$a = "78";
$b = 78;
if ($a === $b){
    echo "Эквивалентны";
}else{
    echo "Не эквивалентны";
}