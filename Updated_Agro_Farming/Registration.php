<?php

   //  $user_type = "customer";
    $nameErr=""; $emailErr=""; $usernameErr=""; $passErr="";
    $fname=""; 
    $lname=""; 
    $email=""; 
    $Username=""; 
    $Password=""; 
    $bio="";

      /*if(isset($_POST['img_submit'])){
  
  $img_name=$_FILES['img_upload']['name'];
  $tmp_img_name=$_FILES['img_upload']['tmp_name'];
  $folder='upload/';
  move_uploaded_file($tmp_img_name,$folder.$img_name);
}*/
        
         
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
      /* $myfile = fopen("newfile.txt","w")or die("unable to open");
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
              fclose($myfile);*/
              
//Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname="webtechregistration";
$conn = new mysqli($servername, $username, $password,$dbname);

// Check for errors
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['Username']) || empty($_POST['email']) || empty($_POST['Password'])) {
       echo '<span class = "error" >Please fill up all required fields</span>';
   } else {
     // Insert the data into the database
     if ($user_type == "customer") {
       // Insert customer data into the registration table
       $sql_check = "SELECT * FROM registration WHERE Username = '$Username'";
       $result_check = $conn->query($sql_check);

        if ($result_check->num_rows > 0) {
         // Username already exists in registration table, display error message
         echo '<span class="error">Username already exists</span>';
         }else{
              $sql = "INSERT INTO registration (First_name, Last_name, Username, Email, Pass, Bio) VALUES ('$fname','$lname','$Username','$email','$Password','$bio')";
               $registration_result = $conn->query($sql);
               // Redirect the user to a success page
       header("Location: successfull.php");
       exit;


             }
       
     } else {
      $sql_check = "SELECT * FROM buyer WHERE Username = '$Username'";
       $result_check = $conn->query($sql_check);

        if ($result_check->num_rows > 0) {
         // Username already exists in buyer table, display error message
         echo '<span class="error">Username already exists</span>';
         }else{
              $sql = "INSERT INTO buyer (First_name, Last_name, Username, Email, Pass, Bio) VALUES ('$fname','$lname','$Username','$email','$Password','$bio')";
               $buyer_result = $conn->query($sql);
               // Redirect the user to a success page
       header("Location: successfull.php");
       exit;


             }
     }

     
       // Redirect the user to a success page
       //header("Location: successfull.php");
       //exit;
     
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

#card {
  position: relative;
  top: 150px;
  width: 400px;
  display: block;
  margin: auto;
  text-align: center;
  font-family: 'Source Sans Pro', sans-serif;
}

#upper-side {
  padding: 2em;
  background-color: #8BC34A;
  display: block;
  color: #fff;
  border-top-right-radius: 8px;
  border-top-left-radius: 8px;
}



#status {
  font-weight: lighter;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 1em;
  margin-top: -.2em;
  margin-bottom: 0;
}

#lower-side {
  padding: 2em 2em 5em 2em;
  background: #fff;
  display: block;
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
}

#message {
  margin-top: -.5em;
  color: #757575;
  letter-spacing: 1px;
}

#contBtn {
  position: relative;
  top: 1.5em;
  text-decoration: none;
  background: #8bc34a;
  color: #fff;
  margin: auto;
  padding: .8em 3em;
  -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  border-radius: 25px;
  -webkit-transition: all .4s ease;
    -moz-transition: all .4s ease;
    -o-transition: all .4s ease;
    transition: all .4s ease;
}

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
    <div id='card' class="animated fadeIn">
  <div id='upper-side'>
   
      
        
      <h3 id='status'>
      Success
    </h3>
  </div>
  <div id='lower-side'>
    <p id='message'>
      Congratulations, your account has been successfully created.
    </p>
    <a href="Login.php" id="contBtn">Continue</a>
  </div>
</div>
    <script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
    </body>
    </html>
  