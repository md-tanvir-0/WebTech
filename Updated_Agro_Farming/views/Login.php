
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: lightgray;
  color: #111111;
}

.dark-mode {
  background-color: #111111;
  color: lightgray;
    }

form{  
    border: solid #00796b 2px;  
    width:35%;  
    border-radius: 2px;  
    margin: auto;  
    background: white;  
    padding: 30px;  
}

label{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: bold;
    display: inline-block;
    margin-bottom: 10px;
}

input[type=text], input[type=password] {  
    width: 100%;  
    padding: 12px 20px;  
    margin: 8px 0;  
    display: inline-block;  
    border: 1px solid #ccc;  
    box-sizing: border-box;  
}

button{  
    background-color: #4CAF50;  
    color: white;  
    padding: 14px 20px;  
    margin: 8px 0;  
    border: none;  
    cursor: pointer;  
    width: 100%;  
}  

button:hover {  
    opacity: 0.8;  
} 

.cancelbtn {  
    width: auto;  
    padding: 10px 18px;  
    background-color: #f44336;  
}
.regbt{
  background-color: #f44336;
  animation: mymove 5s infinite;

}
@keyframes mymove {
  0%  {background-color: #f44336;}
  50%  {background-color: #4CAF50;}
  100% {background-color:#f44336; }
}

.imgcontainer {  
    text-align: center;  
    margin: 24px 0 12px 0;  
    position: relative;  
} 

img.avatar {  
    width: 20%;  
    border-radius: 50%;  
}  

.container {  
    padding: 16px;  
}

span.psw {  
    float: right;  
    padding-top: 0px;  
}

@media screen and (max-width: 600px) {
    form {
        width: 80%;
    }
}
.tk{
    background-color: #111111;  
    color: white;  
    padding: 10px 10px;  
    margin-left: 600px;
    margin-bottom: 5px; 
    border-radius: 25px; 
    border: none;  
    cursor: pointer;  
    width: 10%;
  }

.tk:focus {     
    background-color:skyblue;    
}
.error {color: #FF0000;}
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
    <button class="tk" onclick="myFunction()">Dark</button>
    <form method="post" action="../controllers/Logincheck.php"> 
    <center> 
       <h2> New To Agro-Farming? </h2>
         <button style="width: 200px; margin-left:5px;" onclick="window.location.href='Registration.php'" class="regbt">Register Now!</button>
         <h1> Login Form </h1> </center>
        <div class="imgcontainer">

        <img width="200" height="200" src="https://img.freepik.com/free-icon/user_318-266080.jpg?size=338&ext=jpg&ga=GA1.2.922004579.1679410530&semt=ais">
        </div>   
        <div class="container">   
            <label><b>Username :</b></label>   
            <input type="text" placeholder="Enter Username" name="username" required><br><br>  
            <label><b>Password :</b></label>
            <span class="psw">Forgot <a href="#">password?</a></span>   
            <input type="password" placeholder="Enter Password" name="password" required><br><br> 
            <button type="submit">Login</button>    
            <button type="button" onclick="window.location.href='AgroFarming.php'" class="cancelbtn">Cancel</button><br>   
            <p>
                <input type="checkbox"  name="remember"> Remember me
            </p>
        </div>   
    </form>     
    <script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
</body>     
</html>
