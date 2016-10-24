<?php
function CSVtoTable($csv, 'r'){
	$openCSV = fopen($csv, 'r');
	$array = array(fgetcsv($openCSV));
	fclose($openCSV);

	$table = '<table>';
	$table .= '<tr>';
	foreach ($array[0] as $heading => $value){
		$table .= "<th>{$heading}</th>";}
	$table .= '</tr>';
	foreach ($array as $heading => $value){
		$table .= '<tr>';
		foreach($value as $heading2=>$value2){
			$table .= "<td>{$value2}</td>";}
	$table .= '</tr>';}
	$table .= '</table>';}
echo $table;}
	
