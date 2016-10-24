<?php
function array_table($array) {
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
$table .= '</table>';
echo $table;}
	
		
$mlb = array(
 	   array('Team Name'=> 'Yankees','Wins'=> '84', 'Losses'=> '78', 'Games Behind'=> '9', 'Streak'=> 'L1' ),
	   array('Team Name'=> 'Orioles','Wins'=> '89', 'Losses'=> '73', 'Games Behind'=> '4', 'Streak'=> 'W1'),
	   array('Team Name'=> 'Blue Jays','Wins'=> '89', 'Losses'=> '73', 'Games Behind'=> '4', 'Streak'=> 'W2'),
	   array('Team Name'=> 'Red Sox','Wins'=> '93', 'Losses'=> '69', 'Games Behind'=> '-', 'Streak'=> 'L2'),
	   array('Team Name'=> 'Rays','Wins'=> '68', 'Losses'=> '94', 'Games Behind'=> '25', 'Streak'=> 'W2')
	);
    
echo array_table($mlb);
?>
	
