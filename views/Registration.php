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

      // Check for errors
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['Username']) || empty($_POST['email']) || empty($_POST['Password'])) {
       echo '<span class = "error" >Please fill up all required fields</span>';
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
    <button class="tk" onclick="myFunction()">Dark</button>
   <form action='' method='POST' enctype='multipart/form-data' method = "post" action = "<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
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
      <label>ID Card:</label>
        <input type="file" name="img_upload">
        <hr>


      <label>Sign up As:</label>  
      <label style="margin-left: 0px; width: 120px;"><input type="radio" name="Customer" value="customer"> Farmer</label>
      <label style="margin-left: 0px; width: 120px;"><input type="radio" name="Customer" value="buyer"> Customer</label>

    </form>
        
      <hr>
            <label style="font-size: 70%;"><input type="Checkbox">If you entered all correctly</label>
      <input type="Submit" name="img_submit" style="background-color:#45a049; color: white; width: 150px; height: 25px;">
      <button type="button" onclick="window.location.href='Login.php'">Cancel</button>
    </form>
    <script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
    </body>
    </html>