<?php
function selectionSort($arrayNumb){
    $count=count($arrayNumb);
    for($i=0; $i<$count-1; $i++){
        $min=$i;
        for($j=$i+1;$j<$count; $j++){
            if($arrayNumb[$j]<$arrayNumb[$min]){
                $min=$j;
            }
        }
        $arrayNumb = swapPositions($arrayNumb,$i,$min);
    }
    return $arrayNumb;
}

function swapPositions($arrayNumb1, $fakeMin,$realMin){
    $temp=$arrayNumb1[$fakeMin];
    $arrayNumb1[$fakeMin]=$arrayNumb1[$realMin];
    $arrayNumb1[$realMin]=$temp;
    return $arrayNumb1;
}
$numBers=[32,12,43,51];
echo implode(', ',selectionSort($numBers));