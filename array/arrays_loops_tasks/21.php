<?php
/**
 * Created by PhpStorm.
 * User: Yoga
 * Date: 14.10.2017
 * Time: 9:52
 */
//21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
//рядов, а не 5.<br><br>
//1<br>
//22<br>
//333<br>
//4444<br>
//55555

$i=1;
while ($i<=9){
    $k=1;
    while($i>=$k){
        echo $i;
        $k++;
    }
    echo  "<br>";
    $i++;
}