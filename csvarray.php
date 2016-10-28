<?php
function CSVtoArray($CSV){
$file = fopen($CSV, 'r');
while(! feof($file)){
print_r(fgetcsv($file));
}
fclose($file);}

CSVtoArray('baseballstats.csv');
