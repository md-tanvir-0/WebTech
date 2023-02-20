<html>
<head>
  <title>Tanvir webtech</title>
    <style type="text/css">
		body{
			background-color: lightgray;
			align:
		}
		label{
			font-family:'Georgia' ;
			font-size: 100%;
			font-weight:bold ;
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
	.tk{
    background-color: lightgray;
}

.tk:focus {     
    background-color:skyblue;    
}
.error {color: #FF0000;}



    
    
  </style>
  <?php
         // define variables and set to empty values
         $nameErr =""; $emailErr ="";
         $name =""; $email ="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }

            else {
               $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }
            else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
			
          }
		  $myfile = fopen("newfile.txt","w")or die("unable to open");
             $txt = "name";
             fwrite ($myfile,$txt);
             fclose($myfile);
            
            
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
</head>
  <body>
   <form method = "post" action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <fieldset>
			<legend><h1 style="color:#ad1616;">Registration</h1></legend><br>
			<hr>
               <label>Name:</label>
               <input type = "text" placeholder="Enter your Name" name = "name"
               onfocus="this.placeholder=''" 
           onblur="this.placeholder='Enter your Name'">
                  <span class = "error">* <?php echo $nameErr;?></span><br><br>
                <hr>
               <label>E-mail: </label>
               <input type = "text" placeholder="example@mail.com" name = "email"
               onfocus="this.placeholder=''" 
           onblur="this.placeholder='example@mail.com'">
                  <span class = "error">* <?php echo $emailErr;?></span><br><br>
				  <hr>
				  <label> Password:</label>
			<input type="password" name="password"><br><br>
			<label>Select logo:</label>
			  <input type="file" name="fileToUpload" id="fileToUpload">
			  
			<hr>
            <label><input type="Checkbox">If you entered all correctly</label>
			<input class="tk" type="Submit" style="background-color:#1b77d3; color: white;">
			<input class="tk" type="Submit"Value="Reset">

    </form>
    </body>
    </html>
	