<?php 
class Files{
	public function open($file){
		$fo = fopen($file, 'r');
			if(file_exists($file)){
			echo "This file exists.";
			}
		}
}
$n = new Files();
$n->open('tests.txt');
try{
	if(!file_exists('tests.txt')){
	throw new Exception("This file does not exist.");
	}
}
catch(Exception $e){
	echo 'Message: ' .$e->getMessage();
}
	function open($file2){
		$fo2 = fopen($file2, 'w');
		if(is_writable($file2)){
		echo "This file is writable.";
		}
}
$n->open('t.txt');
	try{
		if(!is_writable($file2)){
			throw new Exception("This file is not writable.");
		}
		
	
	}
	catch(Exception $f){
		echo 'Message: ' .$f->getMessage();
	
	}
?>