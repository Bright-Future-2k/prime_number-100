<?php
function checkNum ($n){
    if ($n < 2){
        return false;
    }
    for ($i =2 ;$i < sqrt($n);$i++){
        if ($n % $i ==0){
            return false;
        }

    }
    return true;

}
echo "cac so ngto < 100 la: ";
for ($j = 0; $j <100 ;$j++){
    if (checkNum($j)){
        echo $j . " ";
    }
}
?>
