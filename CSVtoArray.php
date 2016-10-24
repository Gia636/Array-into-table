<?php
function CSVtoArray($csv, 'r');
	$openCSV = fopen($csv, 'r');
	print_r(fgetcsv($openCSV));
	fclose($openCSV);
?>
