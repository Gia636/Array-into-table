<?php
error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 define('HOST', 'sql1.njit.edu');
 define('USER', 'ge45');
 define('PASS', '80owHFnK');
 define('NAME', 'ge45');
 $conn = mysql_connect(HOST,USER,PASS);
 $dbcon = mysql_select_db(NAME);
 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
 }