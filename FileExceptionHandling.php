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

?>