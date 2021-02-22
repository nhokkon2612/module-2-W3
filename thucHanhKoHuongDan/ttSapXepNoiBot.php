<?php
function bbSort($arrayNumbs){
    $count=count($arrayNumbs);
    for($i=0; $i<$count;$i++){
        for($j=0; $j<$count-$i-1; $j++){
            if($arrayNumbs[$j]>$arrayNumbs[$j+1]){
                $temp=$arrayNumbs[$j];
                $arrayNumbs[$j]=$arrayNumbs[$j+1];
                $arrayNumbs[$j+1]=$temp;
            }
        }
    }
    for($i=0;$i<$count;$i++){
        echo $arrayNumbs[$i]. ",";
    }
}
$numBers=[2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
bbSort($numBers);
