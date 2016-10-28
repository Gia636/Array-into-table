<?php
function CSVtoArray($CSV){
$file = fopen($CSV, 'r');
while(! feof($file)){
$array = fgetcsv($file);
}
fclose($file);
$table = '<table>';
$table .= '<tr>'
foreach ($array as $value){
$table .= '<td>{$value}</td>;
$table .= '</tr>';}
$table .= '</table>';
echo $table;}

CSVtoArray('baseballstats.csv');

?>