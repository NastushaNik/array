<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 08.10.2017
 * Time: 15:28
 */

/*
 * Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что каждое новое
 * предложение начиняется с большой буквы.<br>
 * Пример:<br><br>
 * Входная строка: 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь.
 * а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';<br><br>
 * Строка, возвращенная функцией :  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в
 * музыканты не годитесь. А король-то — голый. А ларчик просто открывался.А там хоть трава не расти.';
 */
header('Content-Type: text/html; charset=UTF-8');

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_regex_encoding('UTF-8');

$sentence = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь.
 а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';

function upper($sentens){
    $text_arr = explode('.', $sentens);
    var_dump($text_arr);
    foreach ($text_arr as $value){
      print_r(substr($value, 0, 1));
    }
}
upper($sentence);