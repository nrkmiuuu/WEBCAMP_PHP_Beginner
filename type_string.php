<?php

$s = "Hello";
var_dump($s);

//一文字目にアクセス
echo $s[1] , "\n"; //eがでる

//マルチバイトで０文字目にアクセス
$multi_string = "あいうえお";
var_dump($multi_string);
echo $multi_string[0] , "\n";

//「数字」と「数値」
$num_i = 123;
$num_s = "123";

var_dump($num_i);
var_dump($num_s);

//シングルクォートとダブルクォートの違い
$double_s = "nuim is {$num_i}";
$double_s = 'nuim is {$num_i}';