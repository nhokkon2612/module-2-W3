<?php
$regex ='/^[A,C,P]+[0-9]{4,4}[G,H,I,K,L,M]$/' ;
function checkNameClass($str){
    $regex='/^[A,C,P]+[0-9]{4,4}[G,H,I,K,L,M]$/';
        if(preg_match($regex,$str)){
            echo "$str  hop le <br>";
        }else{
            echo"$str khong hop le <br>";
        }
}
checkNameClass('C120K');
checkNameClass('C1220K');
checkNameClass('C122020K');
checkNameClass('c1220K');
checkNameClass('T1220K');
checkNameClass('H1220K');
