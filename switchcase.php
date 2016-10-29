<?php
$var = '';
$var2 = 'this is a variable';
$var3 = 'this is another variable';
$var4 = NULL;

switch ($var) {
    case 'this is a variable':
        $set = (isset($var2));
		echo $set;
        break;
    case '':
		$empty = (empty($var));
		echo $empty;
        break;
    case 'this is another variable':
        $null = (is_null($var4));
		echo $null;
        break;
}
echo '<br></br>';

switch($var2){
	case '':
		$n = (is_null($var2));
		echo 'This is null';
		break;
	
	case 'this is another variable':
		$e = (empty($var2));
		echo 'This set is empty';
		break;

	case 'this is a variable':
		$s = (isset($var2));
	echo 'this is the set: ' . $s;
		break;
}
echo '<br></br>';

switch($var3){
	case 'this is another variable':
		$isset = (isset($var3));
		$emp = (empty($var));
		$is_null = (is_null($var4));
	echo "isset: $isset, empty: $emp, is_null: $is_null";
}
echo '<br></br>';

switch($var4){
	case NULL:
		$nullvar = (is_null($var4));
		echo 'This variable is null.';
	case '':
		$empt = (empty($var4));
		echo 'This variable is empty.';
	case ! 'this is a variable':
		$is = (isset($var4));
		echo 'This variable is not set.';
		break;}

?>
