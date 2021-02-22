<?php
function intertionSort($myArray){
    for($i=0; $i<count($myArray); $i++){
        $value=$myArray[i];
        $j=$i-1;
        while ($j>=0 && $myArray[$j]>$value){
            $myArray[$j+1]=$myArray[j];
            $j--;
        }
        $myArray[$j+1]=$value;
    }
    return $myArray;
}