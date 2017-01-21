<?php

$table = [
  ['ID', 'Title', 'Name', 'Age'],
  [1, 'CEO', 'John', 35],
  [2, 'CTO', 'Sandeep', 29],
  [3, 'CFO', 'Laurel', 31],
  [4, 'Manager', 'Andrew', 25],
  [5, 'Engineer', 'Samantha', 26],
  [6, 'Designer', 'Lee', 24]
];


$render_table = "";
$render_table .= "<table border='1' cellpadding='5' >";
foreach($table as $key => $table_item){
$render_table .= "<tr>";
foreach($table_item as $value){
    if ($table_item == $table[0]){
          $render_table.=('<th>' . $value . '</th>');
        }else{
$render_table .= "<td>".$value."</td>";
        }
   }
$render_table .= "</tr>";
     }
$render_table .= "</table>";
echo $render_table;

?>