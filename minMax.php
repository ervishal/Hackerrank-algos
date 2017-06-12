<?php

function minMax($arr){
   $cnt = count($arr);
   $sum = array_sum($arr);
   $minMax = array();
    for($i = 0; $i < $cnt; $i++) {
        $minMax[] = $sum - $arr[$i];
    }
    
    return ['min' => min($minMax), 'max' => max($minMax)];
}


$handle = fopen ("php://stdin","r");
// echo 'Please enter numbers: '; 
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);

$result = minMax($arr);
// echo 'min max of above numbers:'.PHP_EOL;
echo $result['min'].' '.$result['max'];
fclose($handle);

?>
