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

function removeDups($array){
    $array2 = array();

    foreach ($array as $num){
        if (!in_array($num, $array2)){
            array_push($array2, $num);
        }

    }
    foreach ($array2 as $num) {
        echo "$num <br>";
    }
}

function distribution($array){

    $array2 = array();
    $occurences = array_count_values($array);

    foreach ($array as $num){
        $array2[$num] = $occurences[$num];
    }
    return $array2;
}

