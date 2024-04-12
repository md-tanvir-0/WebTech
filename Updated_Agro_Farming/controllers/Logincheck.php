<?php
require_once('../models/dbmodel.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $Username = $_POST['username'];
  $Password = $_POST['password'];

  if($Username=="" && $Password=="")
    {
      echo "Enter name & password";
    }
    else{

$Auth1 = auth1($Username,$Password);
// Check if the username and password match in the registration table
if($Auth1) {
  // Redirect the user to the registration page
  header("Location:../views/Farmer.php");
  
}

 $Auth2 = auth2($Username,$Password);
// Check if the username and password match in the buyer table
if ($Auth2) {
  // Redirect the user to the buyer page
  header("Location:../views/buyer.php");
  
}
$Auth3 = auth3($Username,$Password);
if ($Auth3) {
  // Redirect the user to the buyer page
  header("Location:../views/AdminPanel.php");
  
}
$Auth4 = auth4($Username,$Password);
if ($Auth4) {
  // Redirect the user to the buyer page
  header("Location:../views/Agent.php");
  
}
// If the username and password do not match in either table, show an error message
echo "Invalid username or password.";
}

}

?>