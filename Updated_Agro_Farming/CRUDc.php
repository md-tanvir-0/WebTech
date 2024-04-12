<?php
require_once('../models/dbmodel.php');

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $Delete=CustomerD($id);
    if ($Delete) {
        // Redirect to current page after successful deletion
        header("Location: ../views/AdminC.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

if(isset($_REQUEST['edit']))
{
  $id=$_REQUEST['edit'];
    $edits=editC($id);
    include '../views/CustomerE.php';
    //header("location:../views/edit.php/'{$id}'");
}

if(isset($_REQUEST['submit']))
{
  if(isset($_REQUEST["submit"])) {
    $id = $_REQUEST["id"];
    $first_name = $_REQUEST["first_name"];
    $last_name = $_REQUEST["last_name"];
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["password"];
    $bio = $_REQUEST["bio"];
    $updates=updateC($id,$first_name,$last_name,$username,$email,$pass,$bio);
    if($updates)
      {
          header('location:../views/AdminC.php');
      }
      else
      {
          header('location:../views/AdminC.php');
      } 
}
}

?>