<?php
$arrayNumbers=[];
$max=100;
for($i=1; $i<=$max; $i++){
    $arrayNumbers[]=$i;
}
function checkNumber(array $numbers, $needle): bool{
    $low=1;
    $high=100;
    while ($low<=$high){
        $mid= (int)(($high+$low)/2);
        if($needle>$mid){
            $low=$mid+1;
            echo "Khong! So cua toi lon hon $mid <br>";
        }elseif($needle<$mid){
            $high=$mid-1;
            echo "Khong! So cua toi be hon $mid <br>";
        }else{
            return true;
        }
    }
    return false;
}
$numb= 67;
if(checkNumber($arrayNumbers, $numb)===true){
    echo "Ban doan dung roi! My Lucky Number: $numb";
}else{
    echo"So cua ban ngoai pham vi tro choi!";
}


