  <?php
    error_reporting(0);

    $nameErr =""; $emailErr =""; $usernameErr =""; $passErr ="";
    $fname =""; 
    $lname =""; 
    $email =""; 
    $Username=""; 
    $Password =""; 
    $bio="";

      if(isset($_POST['img_submit'])){
  
  $img_name=$_FILES['img_upload']['name'];
  $tmp_img_name=$_FILES['img_upload']['tmp_name'];
  $folder='upload/';
  move_uploaded_file($tmp_img_name,$folder.$img_name);
}
        
         
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
      
          }
      $myfile = fopen("newfile.txt","w")or die("unable to open");
             $txt = $_POST['fname'];
             fwrite ($myfile,$txt);
             $txt = $_POST['lname'];
             fwrite ($myfile,$txt.PHP_EOL);
             $txt = $_POST['Username'];
             fwrite ($myfile,$txt.PHP_EOL);
             $txt = $_POST['email'];
             fwrite ($myfile,$txt.PHP_EOL);
             $txt = $_POST['Password'];
             fwrite ($myfile,$txt.PHP_EOL);
             $txt = $_POST['bio'];
             fwrite ($myfile,$txt);
             fclose($myfile);

$servername = "localhost";
$username = "root";
$password = "";
$dbname="webtechregistration";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
        $sql ="INSERT INTO registration (First_name, Last_name, Username, Email, Pass, Bio)VALUES('$fname','$lname','$Username','$email','$Password','$bio')";
            $res = $conn->query($sql);

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['fname'])) {
        echo '<span class = "error" >Please fillup Data</span>';
    } else {
        
      echo '<span class="bl" >Etnered successfully</span>';
    }

   
}

            
      ?>
<!DOCTYPE html>     
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tanvir webtech</title>
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
      margin-left:100px ;
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

.tk:focus {     
    background-color:skyblue;    
}
.error {color: #FF0000;}
.bl {color: #339CFF;}

</style>
</head>
  <body>
    <button class="tk" onclick="myFunction()">Dark</button>
   <form action='' method='POST' enctype='multipart/form-data' method = "post" action = "<?php 
         echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
         <fieldset>
      <legend><h1 style="color:#ad1616;">Registration</h1></legend><br>
      <hr>
               <label>Name:</label>
               <span class = "error">*</span>
               <input type = "text" name="fname" placeholder="Enter your first Name"
               onfocus="this.placeholder=''" 
           onblur="this.placeholder='Enter your first Name'">
               <input type = "text" name="lname" placeholder="Enter your last Name"
               onfocus="this.placeholder=''" 
           onblur="this.placeholder='Enter your last Name'">
           <span class = "error"><?php echo $nameErr;?></span><br><br>
                <hr>
                <label>Username:</label>
               <span class = "error">*</span>
               <input type = "text" name="Username" placeholder="@username"
               onfocus="this.placeholder=''" 
           onblur="this.placeholder='@usaername'">
           <span class = "error"><?php echo $usernameErr;?></span><br><br>
           <hr>
               <label>E-mail:</label>
               <span class = "error">*</span> 
               <input type = "text" name="email" placeholder="example@mail.com"
               onfocus="this.placeholder=''" 
           onblur="this.placeholder='example@mail.com'">
                  <span class = "error"><?php echo $emailErr;?></span><br><br>
          <hr>
          <label> Password:</label>
          <span class = "error">*</span>
      <input type="password" name="Password">
      <span class = "error"><?php echo $passErr;?></span><br><br>
      <hr>
      <label>Short Bio:</label>
      <textarea name="bio" rows="4" cols="50"></textarea><br><br>
      <hr>
      <label>Select logo:</label>
        <input type="file" name="img_upload">
        
      <hr>
            <label style="font-size: 70%;"><input type="Checkbox">If you entered all correctly</label>
      <input class="tk" type="Submit" name="img_submit" style="background-color:#1b77d3; color: white;">
    </form>
    <script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
    </body>
    </html>
  