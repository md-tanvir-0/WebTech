<?php

   //  $user_type = "customer";
    $nameErr=""; $emailErr=""; $usernameErr=""; $passErr="";
    $fname=""; 
    $lname=""; 
    $email=""; 
    $Username=""; 
    $Password=""; 
    $bio="";
  
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["fname"])) {
               $nameErr = "Name is required";
            }

            else {
               $fname = ($_POST["fname"]);
               $lname = ($_POST["lname"]);

            }
            if (empty($_POST["Username"])) {
               $usernameErr = "Username is required";
            }

            else {
               $Username = ($_POST["Username"]);
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }
            else {
               $email = ($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
            if (empty($_POST["Password"])) {
               $passErr = "Password is required";
            }

            else {
               $Password = ($_POST["Password"]);
            }
        
           
               $bio = ($_POST["bio"]);
         }
        if (isset($_POST["Customer"]) && $_POST["Customer"] == "buyer") {
          $user_type = "buyer";
          } else {
             $user_type = "customer";
             }
      

// Check for errors
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['Username']) || empty($_POST['email']) || empty($_POST['Password'])) {
       echo '<span class = "error" >Please fill up all required fields</span>';
   }
}
?>