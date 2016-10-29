<?php
function CSVtoTable($CSV){
$table = '<table>';
$file = fopen($CSV, 'r');
$headings = fgetcsv($file);
$table .= '<tr>';
foreach ($headings as $number => $value){
$table .= "<th>{$value}</th>";}
$table .= '</tr>';
$table .= '<tr>';
while(! feof($file)){
$data = fgetcsv($file);
foreach ($data as $number => $stat){
$table .= "<td>{$stat}</td>";}
$table .= '<tr>';}
$table .= '</tr>';
$table .= '</table>';

echo $table;}

CSVtoTable('baseballstats.csv');
?>


