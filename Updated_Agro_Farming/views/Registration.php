<?php
//  $user_type = "customer";
   // $nameErr=""; $emailErr=""; $usernameErr=""; $passErr="";
    $fname=""; 
    $lname=""; 
    $email=""; 
    $Username=""; 
    $Password=""; 
    $bio="";
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
         }*/
    
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style type="text/css">
       body{
      background-color: lightgray;
  color: #111111;
}

.dark-mode {
  background-color: #111111;
  color: lightgray;
    }
    .container {
      max-width: 500px;
      margin: 50px auto;
      text-align: left;
      font-family: sans-serif;
    }
    .form-control:focus {
      border-color: #000;
      box-shadow: none;
    }
    
    
    .error {
      color: red;
      font-weight: 400;
      display: block;
      padding: 6px 0;
      font-size: 14px;
    }
    .form-control.error {
      border-color: red;
      padding: .375rem .75rem;
    }    .container {
      max-width: 500px;
      margin-bottom:5px;
      text-align: left;
      font-family: sans-serif;
    }
    form {
        width: 130%;
      border: 1px solid #1A33FF;
      background: #ecf5fc;
      padding: 40px 50px 45px;
    }
    .form-control:focus {
      border-color: #000;
      box-shadow: none;
    }
    
    
    .error {
      color: red;
      font-weight: 400;
      display: block;
      padding: 6px 0;
      font-size: 14px;
    }
    .form-control.error {
      border-color: red;
      padding: .375rem .75rem;
    }    
    h1{
      margin-left:35%;
      font-size: 200%;
    }
    .submit{  
    background-color: #4CAF50;  
    color: white;  
    padding: 10px 10px;    
    border: none;  
    cursor: pointer;  
    width: 23%;  
}  

.submit:hover {  
    opacity: 0.8;  
} 
.submitC{  
    background-color: #f44336;  
    color: white;  
    padding: 10px 10px;  
    margin: 8px 0;  
    border: none;  
    cursor: pointer;  
    width: 15%;  
}  

.submitC:hover {  
    opacity: 0.8;  
} 
    select{
       border-radius: 4px;
    }
  .tk{
    background-color: #111111;  
    color: white;  
    padding: 10px 10px;  
    margin-left: 250px;
    margin-bottom: 5px; 
    border-radius: 25px; 
    border: none;  
    cursor: pointer;  
    width: 15%;
  }

.tk:focus {     
    background-color:skyblue;    
}
.bl {color: #339CFF;}
.dark-mode body {
        background-color: #111111;
        color: lightgray;
    }

    .dark-mode form {
        background: #111111;
        border-color: #00796b;
        color: lightgray;
    }

    .dark-mode label {
        color: lightgray;
    }
    .dark-mode input[type=text],
    .dark-mode input[type=password] {
        background-color: #222222;
        color: lightgray;
    }

    .dark-mode textarea {
        background-color: #222222;
        color: lightgray;
    }

    .dark-mode .submit {
        background-color: #00796b;
    }
.dark-mode .submitC {
        background-color: #ad1616;
    }

    .dark-mode .tk {
        background-color: #111111;
        color: white;
        border: 1px solid white;
    }
    

    </style>
</head>
<body>
<body>
    <div class="container mt-5">
    <button class="tk" onclick="myFunction()">Dark</button>
    <form name="contactForm" method="post" action="../controllers/Cregistraion.php" enctype='multipart/form-data'>

      <h1 style="color:#ad1616;">Registration</h1><br>
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter your first Name"
               onfocus="this.placeholder=''" 
           onblur="this.placeholder='Enter your first Name'">
      </div>
      <input class="form-control" style="margin-top: 5px;" type = "text" name="lname" placeholder="Enter your last Name"
               onfocus="this.placeholder=''" 
           onblur="this.placeholder='Enter your last Name'">
           <br>
      <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="Username" id="Username" placeholder="@username"
               onfocus="this.placeholder=''" 
           onblur="this.placeholder='@usaername'">
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="example@mail.com"
               onfocus="this.placeholder=''" 
           onblur="this.placeholder='example@mail.com'">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" name="Password" id="Password">
      </div>
      <div class="form-group">
        <label>Bio</label>
        <textarea class="form-control" name="bio" id="bio" rows="4"></textarea>
      </div>
      <label>ID Card:</label>
        <input type="file" name="img_upload"><br><br>
        


      <label>Sign up As:</label>  
      <label style="margin-left: 0px; width: 120px;"><input type="radio" name="Customer" value="customer"> Farmer</label>
<label style="margin-left: 0px; width: 120px;"><input type="radio" name="Customer" value="buyer"> Customer</label><br><br>
            <input type="Submit" class="submit" name="img_submit">
      <button class="submitC" type="button" onclick="window.location.href='../controllers/CAdminR.php'">Cancel</button>
      
        
<!--       <h3 id='status'>
      Success
    </h3>
  </div>
  <div id='lower-side'>
    <p id='message'>
      Congratulations, your account has been successfully created.
    </p>
    <a href="Login.php" id="contBtn">Continue</a>
  </div>
</div> -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
  
  <script>
    $(function() {
      $("form[name='contactForm']").validate({
        // Define validation rules
        rules: {
          fname: "required",
          Username: "required",
          email: "required",
          Password: "required",
          bio: "required",
          fname: {
            required: true
          },
          Username: {
             required: true
          },          
          email: {
            required: true,
            email: true
          },          
          Password: {
            required: true,
            minlength: 8,
          },          
          bio: {
            required: true
          }
        },
        // Specify validation error messages
        messages: {
          fname: "Please provide a valid name.",
          email: {
            required: "Please enter your email",
            minlength: "Please enter a valid email address"
          },
          Username: {
            required: "Please provide a Username",
          },
          Password: {
            required: "Please provide a Password",
            minlength: "Password must be min 8 characters long",
            

          },
          bio: "Please enter your bio"
        },
        submitHandler: function(form) {
          form.submit();
        }
      });
    });       
  </script>
    <script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
</body>
</html>



