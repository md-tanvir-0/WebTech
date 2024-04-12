<?php
require_once('../models/dbmodel.php');

if (isset($_GET['deleteF'])) {
    $id = $_GET['deleteF'];
    $Delete=FarmerD($id);
    if ($Delete) {
        // Redirect to current page after successful deletion
        header("Location: ../views/AdminF.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

if(isset($_REQUEST['edit']))
{
  $id=$_REQUEST['edit'];
    $edits=editF($id);
    include '../views/FarmerE.php';
    //header("location:../views/edit.php/'{$id}'");
}

if(isset($_REQUEST['submitF']))
{
  if(isset($_REQUEST["submitF"])) {
    $id = $_REQUEST["id"];
    $first_name = $_REQUEST["first_name"];
    $last_name = $_REQUEST["last_name"];
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["password"];
    $bio = $_REQUEST["bio"];
    $updateF=updateF($id,$first_name,$last_name,$username,$email,$pass,$bio);
    if($updateF)
      {
          header('location:../views/AdminF.php');
      }
      else
      {
          header('location:../views/AdminF.php');
      } 
}
}

if (isset($_GET['deleteC'])) {
    $id = $_GET['deleteC'];
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

if(isset($_REQUEST['submitC']))
{
  if(isset($_REQUEST["submitC"])) {
    $id = $_REQUEST["id"];
    $first_name = $_REQUEST["first_name"];
    $last_name = $_REQUEST["last_name"];
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["password"];
    $bio = $_REQUEST["bio"];
    $updateC=updateC($id,$first_name,$last_name,$username,$email,$pass,$bio);
    if($updateC)
      {
          header('location:../views/AdminC.php');
      }
      else
      {
          header('location:../views/AdminC.php');
      } 
}
}

if (isset($_GET['deleteA'])) {
    $id = $_GET['deleteA'];
    $Delete=AgentD($id);
    if ($Delete) {
        // Redirect to current page after successful deletion
        header("Location: ../views/AdminA.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

if(isset($_REQUEST['edit']))
{
  $id=$_REQUEST['edit'];
    $edits=editA($id);
    include '../views/AgentE.php';
    //header("location:../views/edit.php/'{$id}'");
}

if(isset($_REQUEST['submitA']))
{
  if(isset($_REQUEST["submitA"])) {
    $id = $_REQUEST["id"];
    $username = $_REQUEST["username"];
    $pass = $_REQUEST["password"];
    $updateA=updateA($id,$username,$pass);
    if($updateA)
      {
          header('location:../views/AdminA.php');
      }
      else
      {
          header('location:../views/AdminA.php');
      } 
}
}

?>