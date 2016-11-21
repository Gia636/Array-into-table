<?php
  function __autoload($file) {
      require_once $file . '.php';
  }
   
  $a = new HTML();

?>