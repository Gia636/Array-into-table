<?php
// $GLOBALS: the purpose is to define variables available in all scopes of the script. 
// It also removes the need of the $ sign when being accessed in functions and methods.
function globals(){
$string = "local variable";
echo '$string in global scope: ' . $GLOBALS["string"] . "\n";
echo '$string in current scope: ' . $string . "\n";
}
$string = "global variable";
globals();


// $_SERVER: the purpose is to echo the name of the server
echo $_SERVER['SERVER_NAME'];

// $_GET: Its purpose is to collect form data.
// The information sent can be seen by everyone.
// Array of variables. Sent to current script by URL parameters.
echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';
// If the url is https://test.com/?name=Giavanna
// The output would be Hello Giavanna!

// $_POST: Its purpose is to collect form data.
// The information is not seen by others.
// Since the variables are not in URL, you cannot bookmark the page.
// Array of variables. Sent to current script by HTTP POST method.
echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';
// If the posted name is Giavanna
// The output would be Hello Giavanna!

// $_FILES: the purpose is to give information about an uploaded file.
echo 'The file name is ' . htmlspecialchars($_FILES["name"]) . '!';


// $_COOKIE: the purpose is the get the name of the cookie if it has been set

echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';
// If the name of the cookie was set to Giavanna
// The output would be Hello Giavanna!

// $_SESSION: the purpose is to set the variables for a session
session_start();
$_SESSION["color"] = "blue";
$_SESSION["number"] = "two";
echo "Session variables are set.";


// $_REQUEST: the purpose is to collect data from html forms.
// It contains data from $_GET, $_POST, and $_COOKIE
echo 'Hello ' . htmlspecialchars($_REQUEST["name"]) . '!'; 
// If name is Giavanna
// The output would be Hello Giavanna!

// $_ENV: the purpose is to return enviornment variables from the web server
echo 'My username is ' .$_ENV["USER"] . '!';  
// If the user is Gia636
// The output would be My username is Gia636!

?>