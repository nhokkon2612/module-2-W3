<?php
    function binarySearch(array $numbers,  $needle): bool{
        $low =0;
        $high = count($numbers)-1 ;
        while ($low<=$high){
            $mid= (int)(($high+$low)/2) ;
            if ($needle>$mid){
                $low=$mid+1 ;
            }else if($needle<$mid){
                $high=$mid-1 ;
            }else{
                return true;
            }
        }
        return false;
    }

    $numbers = range(1,200, 5);
    $number =31 ;
    if (binarySearch($numbers,$number) === false){
        echo "$number not Found <br> ";
    }else {
        echo "$number found <br>";
    }
    $number=500;
    if (binarySearch($numbers,$number) === false){
        echo "$number not Found <br>";
    }else{
        echo"$number found <br>";
    }
