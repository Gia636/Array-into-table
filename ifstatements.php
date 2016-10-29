<?php
$myvar = '';
$empty = '';
$line = 'this is a line';
$null = NULL;
if (isset($line) and empty($myvar) and is_null($null));{
	echo 'These variables are set, empty, and null.';}

echo '<br></br>';

if (isset($myvar) and !empty($line) and ! is_null($empty));{
	$myvar .= 'filled';}
    echo "The variable is $myvar.";

echo '<br></br>';	

if (isset($line));{
    $a = 'cat';
	$b = '';}
$AA = var_dump(is_null($a)); 
$BB = var_dump(empty($b));
echo $AA;
echo $BB;

echo '<br></br>';

if (empty($empty));{
	echo 'The variable is empty.';}
$words = array('these', 'are', 'words', '');
foreach ($words as $word){
	print_r(isset($word));
	print_r(is_null($word));
	print_r(empty($word));}
  
?>