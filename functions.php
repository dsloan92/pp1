<?php

function printArr($array){
    foreach ($array as $num) {
        echo "$num <br>";
    }
}

function largest($array){

    $max = $array[0];
    foreach ($array as $num) {
        if ($num > $max) {
            $max = $num;
        }
    }
    echo "The largest number is ". $max;
}


