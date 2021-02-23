<?php
$regex='/^[_a-z0-9]{6,}$/';
function checkAccount($str){
    $regex='/^[0-9_a-z]{6,}$/';
    if(preg_match($regex,$str)){
        echo'account hop le <br>';
    }else{
        echo 'account cua ban saii <br>';
    }
}
checkAccount('123abc');
checkAccount('_abc123');
checkAccount('______');
checkAccount('hanoi_1N15');
checkAccount('123456');
checkAccount('Hanoi_1');
