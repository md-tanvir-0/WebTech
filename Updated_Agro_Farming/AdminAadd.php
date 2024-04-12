<?php

   //  $user_type = "customer";
    $usernameErr=""; $passErr=""; 
    $Username=""; 
    $Password=""; 
        
           if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (empty($_POST["Username"])) {
               $usernameErr ="Username is required";
            }

            else {
               $Username = ($_POST["Username"]);
            }
            
            if (empty($_POST["Password"])) {
               $passErr = "Password is required";
            }

            else {
               $Password = ($_POST["Password"]);
            }
        }
        
           
      // $myfile = fopen("newfile.txt","w")or die("unable to open");
      //        $txt = $_POST['fname'];
      //        fwrite ($myfile,$txt);
      //        $txt = $_POST['lname'];
      //        fwrite ($myfile,$txt.PHP_EOL);
      //        $txt = $_POST['Username'];
      //        fwrite ($myfile,$txt.PHP_EOL);
      //        $txt = $_POST['email'];
      //        fwrite ($myfile,$txt.PHP_EOL);
      //        $txt = $_POST['Password'];
      //        fwrite ($myfile,$txt.PHP_EOL);
      //        $txt = $_POST['bio'];
      //        fwrite ($myfile,$txt);
      //        fclose($myfile);
//Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname="webtechregistration";
$conn = new mysqli($servername, $username, $password,$dbname);

// Check for errors
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST['Username']) || empty($_POST['Password'])) {
       echo '<span class = "error" >Please fill up all required fields</span>';
   } else {
     // Insert the data into the database
       $sql_check = "SELECT * FROM agent WHERE AG_Username = '$Username'";
       $result_check = $conn->query($sql_check);

        if ($result_check->num_rows > 0) {
         // Username already exists in registration table, display error message
         echo '<span class="error">Username already exists</span>';
         }else{
              $sql = "INSERT INTO agent (AG_Username, AG_Pass) VALUES ('$Username','$Password')";
               $registration_result = $conn->query($sql);
               // Redirect the user to a success page
       header("Location:Adminagent.php");
       exit;


             }
       
     }
 }


   


            
      ?>
<!DOCTYPE html>     
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration</title>
    <style type="text/css">
    body{
      background-color: lightgray;
  color: #111111;
}

.dark-mode {
  background-color: #111111;
  color: lightgray;
    }
    label{
      font-family:'Georgia' ;
      font-size: 100%;
      font-weight:600;
      margin-left:150px ;
      width: 200px;
      display: inline-block;
      text-align: right;


    }
    

    
    h1{
      margin-left:300px;
      font-size: 200%;
    }
    input{
       border-radius: 4px;
       
    }
    select{
       border-radius: 4px;
    }
  .tk{
    float: right;
  }

.tk:focus {     
    background-color:skyblue;    
}
.error {color: #FF0000;}
.bl {color: #339CFF;}

</style>
</head>
  <body>
   <form action='' method='POST' enctype='multipart/form-data' method = "post" action = "<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
         <fieldset>
      <legend><h1 style="color:#ad1616;">Add Agent</h1></legend><br>
      <hr>
        <label>Username:</label>
        <span class = "error">*</span>
        <input type = "text" name="Username" placeholder="@username"
        onfocus="this.placeholder=''" 
        onblur="this.placeholder='@usaername'">
           <span class = "error"><?php echo $usernameErr;?></span><br><br>
           <hr>
          <label> Password:</label>
          <span class = "error">*</span>
      <input type="password" name="Password">
      <span class = "error"><?php echo $passErr;?></span><br><br>
      <hr>
      <input type="Submit" name="img_submit" style="background-color:#45a049; color: white; width: 150px; height: 25px; margin-left:365px ;">
      <button type="button" onclick="window.location.href='Adminagent.php'">Cancel</button>
  </fieldset>
</form>
    </body>
    </html>
  