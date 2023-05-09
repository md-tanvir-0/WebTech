<?php
require_once('db.php');
$conn=getConnection();
$Username = $_POST['username'];
$Password = $_POST['password'];

// Check if the user exists and the password is correct
$sql = "SELECT * FROM registration WHERE Username = '$Username' AND Pass = '$Password'";
$registration_result = $conn->query($sql);

$sql = "SELECT * FROM buyer WHERE Username = '$Username' AND Pass = '$Password'";
$buyer_result = $conn->query($sql);


$sql = "SELECT * FROM admin WHERE A_Username = '$Username' AND Password = '$Password'";
$admin_result = $conn->query($sql);


$sql = "SELECT * FROM agent WHERE AG_Username = '$Username' AND AG_Pass = '$Password'";
$agent_result = $conn->query($sql);

?>