<?php
function appearCheck(array $numbers , int $needle){
    $totalIteams = count($numbers);
    $count= 0;
    for ($i=0; $i<$totalIteams; $i++){
        if($numbers[$i]===$needle){
            $count++;
        }
    }
    echo "so lan xuan hien cua $needle la ".$count;
}
$tests=[1,4,3,5,3,6,3,5,1,4];
$first=1;
appearCheck($tests,$first);
