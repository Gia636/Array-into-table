<?php
function __autoload($file) {
    if(file_exists($file . '.php')) {
        require_once($file . '.php');    
    } else {
        throw new Exception("$class_name does not exist.");
    }
}
 
try {
    $a = new phpexceptionhandling();
    
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
?>