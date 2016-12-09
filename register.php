<?php
  ob_start();
  session_start();
  if( isset($_SESSION['user'])!="" ){
    header("Location: homepage.php");}
include_once 'connect.php';
$error = false;
if ( isset($_POST['btn-signup']) ) {

  $username = trim($_POST['username']);
  $username = strip_tags($username);
  $username = htmlspecialchars($username);

  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $password = trim($_POST['password']);
  $password = strip_tags($password);
  $password = htmlspecialchars($password);

  $confirmpassword = trim($_POST['confirmpassword']);
  $confirmpassword = strip_tags($confirmpassword);
  $confirmpassword = htmlspecialchars($confirmpassword);

  if (empty($username)) {
   $error = true;
   $userError = "Please enter a username.";
} 
   else if (strlen($username) < 5) {
   $error = true;
   $userError = "Your username must have at least 5 characters.";
} 
   else if (!preg_match("/^[a-zA-Z0-9]+$/",$username)) {
   $error = true;
   $userError = "Username may only contain letters and numbers.";
}
 else {

   $query = "SELECT userName FROM users WHERE userName='$username'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
    $error = true;
    $userError = "This username is already taken.";
   }
  }
 
   
if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "This is not a valid email address.";
} 
   else {

   $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Email is already in use.";
   }
  }

  if (empty($password)){
   $error = true;
   $passError = "Please enter a password.";
  } else if(strlen($password) < 8) {
   $error = true;
   $passError = "Password must have at least 8 characters.";
  }
  
   if ($_POST['password'] != $_POST['confirmpassword']){
    $error = true;
    $nomatch = "Passwords do not match.";
}
if( !$error ) {
   $query = "INSERT INTO users(userName,userEmail,userPass) VALUES('$username','$email','$password')";
   $registered = mysql_query($query);
    
   if ($registered) {
    $errorType = "success";
    $errorMessage = "You are now registered. You can now login to access your profile.";
    unset($username);
    unset($email);
    unset($password);
} 
    else {
    $errorType = "danger";
    $errorMessage = "Something went wrong, please try again later..."; 

}}}

?>
<!DOCTYPE html>
<html>
<body>
<div class="container">
<div id="login-form">
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
<div class="col-md-12">
<div class="form-group">
<h1 class="">Sign Up for NYYankeesFans.com</h1>
</div>
<div class="form-group">
<hr />
</div>
<?php
if ( isset($errorMessage) ) {
?>
<div class="form-group">
<div class="alert alert-<?php echo ($errorType=="success") ? "success" : $errType; ?>">
<?php echo $errorMessage; ?>
</div>
</div>
<?php
}
?>
<div class="form-group">
<div class="input-group">

<input type="text" name="username" class="form-control" placeholder="Enter Username" maxlength="50" value="<?php echo $username ?>" />
</div>
<?php echo $userError; ?>
</div>
<div class="form-group">
<div class="input-group">

<input type="email" name="email" class="form-control" placeholder="Enter Email" maxlength="40" value="<?php echo $email ?>" />
</div>
<?php echo $emailError; ?>
</div>
<div class="form-group">
<div class="input-group">

<input type="password" name="password" class="form-control" placeholder="Enter Password" maxlength="15" />
</div>
<div class="form-group">
<div class="input-group">

<input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" maxlength="15" />
</div>
<?php echo $nomatch; ?>
</div>
<div class="form-group">
<hr />
</div>
<div class="form-group">
<button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
</div>
<div class="form-group">
<hr />
</div>
<div class="form-group">
<a href="logon.php">Click here to sign in if you already have an account.</a>
</div>
</div>
</form>
</div> 
</div>
</body>
</html>
<?php ob_end_flush(); ?>