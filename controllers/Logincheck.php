<?php
require_once('../models/dbmodel.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $Username = $_POST['username'];
  $Password = $_POST['password'];


// Check if the username and password match in the registration table
if ($registration_result->num_rows > 0) {
  // Redirect the user to the registration page
  header("Location:../views/Farmer.php");
  exit;
}

// Check if the username and password match in the buyer table
if ($buyer_result->num_rows > 0) {
  // Redirect the user to the buyer page
  header("Location:../views/buyer.php");
  exit;
}

if ($admin_result->num_rows > 0) {
  // Redirect the user to the buyer page
  header("Location:../views/AdminPanel.php");
  exit;
}
if ($agent_result->num_rows > 0) {
  // Redirect the user to the buyer page
  header("Location:../views/Agent.php");
  exit;
}
// If the username and password do not match in either table, show an error message
echo "Invalid username or password.";

}

?>