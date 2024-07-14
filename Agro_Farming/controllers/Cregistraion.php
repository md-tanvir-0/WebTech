<?php
require_once ('../models/dbmodel.php');
require_once ('../views/Registration.php');

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
 if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['Username']) || empty($_POST['email']) || empty($_POST['Password']) || empty($_POST['Customer'])) {
        echo '<span class="error">Please fill up all required fields</span>';
} else {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $Username = $_POST["Username"];
    $email = $_POST["email"];
    $Password = $_POST["Password"];
    $bio = $_POST["bio"];
    $user_type = isset($_POST["Customer"]) && $_POST["Customer"] == "buyer" ? "buyer" : "customer";

    // Insert registration data using the function from RegistrationModel.php
    $result = insertRegistrationData($fname, $lname, $Username, $email, $Password, $bio, $user_type);

    
}
}
?>

