<?php 
function ex1 ($x) {
    return $x * 2 ;
}
$xx = ex1 (6) ;
echo $xx ;
echo "\n";

function ex2 ($a,$b) {
    return $a + $b ;
}
$ab = ex2 (3,6) ;
echo $ab ;
echo "\n";

$arr = array (1, 3, 5 ,7, 9) ;
echo array_product($arr) ;
echo "\n";

$arr = array (2, 6, 3, 10, 4) ;
function max_array ( $arr ) {
$max_number = $arr [0] ;
foreach ( (array) $arr as $a) {
    if ( $max_number < $a) {
        $max_number = $a ;
    }
 }
 return $max_number ;
 }
echo max_array($arr) ;
echo "\n";
