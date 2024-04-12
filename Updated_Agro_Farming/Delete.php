<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtechregistration";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    // Delete data from database
    $deleteSql = "DELETE FROM registration WHERE ID='$id'";
    $result = $conn->query($deleteSql);
    if ($result) {
        // Redirect to current page after successful deletion
        header("Location: Admin.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}


?>