<?php
$regepx ='/^[A-Z]/';
function checkFirstLetterUpperCase($str){
    $regepx='/^[A-Z]/';
    if (preg_match($regepx, $str)){
        echo('Chu dau tien viet hoa <br>');
    }else{
        echo"chu dau tien saiiii <br>";
    }
}
checkFirstLetterUpperCase('codEgym');
checkFirstLetterUpperCase('Codegym');
