<?php

$title="Task - Get Max From Array/";

$arr = array(1, 20, 55, 8, 100, 951, 23);
$n = 0;
// show all array
echo 'Array: ';
for ($i = 0; $i <= 7; $i++)
  { 
    echo $arr[$i]." "; 
  } ;
  // check max from array
foreach ($arr as $key=>$value) {
    if ($value > $n) {
        $n = $value;
    }
}
//result
 echo '<br>';
echo '<b>'.$title.'  '.'Result:</b>'.'  '.$n; 
