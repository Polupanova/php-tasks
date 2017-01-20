<?php

$title="Task - Get Max From Array/";

$ar=array(25,1000,4,14,29,8,15);
echo 'Array: ';
for ($i = 0; $i <= 7; $i++)
  { 
    echo $ar[$i]." "; 
  } ;
  echo '<br>';
echo '<b>'.$title.'  '.'Result:</b>'.'  '.max($ar); 