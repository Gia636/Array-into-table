<?php
function CSVexceptions($CSV, $CSV2){
  function createEx($CSV){
    
    if(!file_exists($CSV)) {
      throw new Exception("File not found");
}
return true;
}
try {
  createEx($CSV);
  $file = fopen($CSV, 'r');
  while(! feof($file)){
  echo print_r(fgetcsv($file));}
  }
catch(Exception $e){
echo 'Message: ' .$e->getMessage();}
   function createEx2($CSV2){
     if(!is_writable($CSV2)){
       throw new Exception("Unable to write file");
}
return true;
}
try {
  createEx2($CSV2);
  $text = array("number" => 2, "color" => "blue");
  $create = fopen($CSV2, "w");
  echo print_r(fputcsv($create, $text));
  }
catch(Exception $f){
echo 'Message: ' .$f->getMessage();}

}
CSVexceptions('blank1.csv', 'blank2.csv');

?>