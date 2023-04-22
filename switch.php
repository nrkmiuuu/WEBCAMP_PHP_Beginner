<?php

$i = 1;
switch($i) {
    case 0:
        echo "iは0です \n";
        break;
        
    case 1:
       echo "i　は1です\n";
       break;
       
    default:
        echo "i は 0と1 以外です \n";
        break;
};

// PHP 8未満だと特に注意が必要なコード
$i = 2;
switch($i){
    case '2a':
        echo "iは '2aです \n";
        break;
        
    case '2':
        echo "i は '2(string)です \n";
        break;
        
    case 2:
        echo "i　は2(int)です \n";
        break;
        
}