<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 09.10.2017
 * Time: 7:21
 */
//Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
//месяц выведите жирным. Текущий месяц должен храниться в переменной $month.

$months = array("1"=>"Январь","2"=>"Февраль","3"=>"Март","4"=>"Апрель","5"=>"Май", "6"=>"Июнь", "7"=>"Июль","8"=>"Август","9"=>"Сентябрь","10"=>"Октябрь","11"=>"Ноябрь","12"=>"Декабрь");
$month = 'Октябрь';

foreach ($months as $value){
    if ($value == $month){
        echo '<b>'.$value.'</b>, ';
    }else{
        echo $value.', ';
    }
}