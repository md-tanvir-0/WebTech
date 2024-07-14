<!DOCTYPE html>
<html>
     <head>
     <title>Agro-Farming</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     <style type="text/css">

 html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: lightgray;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #48682B;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 16px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  background-color: lightgray;
  transition: background-color 0.5s ;
  color: #48682B
}
.container h2{
  padding-top: 5px;
}
.card:hover{
   background-color: #50772b;
   color: white;
}

.about-section {
  padding: 12px;
  display: block;
  background-image: url(https://media.istockphoto.com/id/1325265258/photo/smart-farming-with-digital-technology-agriculture-app.jpg?s=612x612&w=0&k=20&c=bwXJ69z0sKK255b1w_FjzeKB1_9APnMBmIxBKRABdWw=);
  background-repeat: no-repeat;
  background-size: cover;
  color: #fff;
}

.container {
  padding: 0 16px;
  font-size: 95%;
  line-height: 150%;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
/* Style the footer */
.footer {
  font-size: 85%;
  background-color: #f1f1f1;
  padding: 30px;
}
a, a:hover {
     text-decoration: none;
}

.socialbtns, .socialbtns ul, .socialbtns li{
     margin: 0;
     padding: 5px;
}

.socialbtns li {
    list-style: none outside none;
    display: inline-block;
}

.socialbtns .fa {
     width: 40px;
    height: 28px;
     color: #FFF;
     background-color: #000;
     padding-top: 12px;
     border-radius: 20px;
     -moz-border-radius: 20px;
     -webkit-border-radius: 20px;
     -o-border-radius: 20px;
     transition: all ease 0.5s;
     -moz-transition: all ease 0.5s;
     -webkit-transition: all ease 0.5s;
     -o-transition: all ease 0.5s;
}

.socialbtns .fa:hover {
     transform: scale(1.2,1.2);
     -moz-transform: scale(1.2,1.2);
     -webkit-transform: scale(1.2,1.2);
     -o-transform: scale(1.2,1.2);
     transition: all ease 0.5s;
     -moz-transition: all ease 0.5s;
     -webkit-transition: all ease 0.5s;
     -o-transition: all ease 0.5s;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 25px;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border-radius: 25px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
form{
  background-color: #335d72;
  border-radius: 5px;
  padding: 10px;
  border: solid #00796b 2px;  
  width:50%;    
  margin: 25px auto;    
  padding: 20px;
}
     </style>
     </head>
     <body >
    <div class="topnav">
    <a href="AgroFarming.php">Home</a> 
     <a style="background-color:#ddd;color:black;" href="contact.php">Contacts</a>
     <a href="aboutus.php">Abot us </a>
     <a style="float: right;" href="Login.php">Sign up / Log in </a>
     </div>
     <div class="about-section">
  <h1 style="text-align: center;font-size: 300%;">Contact us</h1>
      <form><label>Name</label> 
      <input type="text" required />
      <label>Email</label> 
      <input type="text" required />
      <label>Phone Number</label> 
      <input type="text" required />
      <label>Message</label>
      <textarea style="border-radius: 8px;" required></textarea>
      <input type="submit" name="send" value="Send it!">
    </form>
</div>
<hr>
<div class="row">
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Physical Adress</h2>
        <p>Flat no: A-4 (5th floor)</p> <p>Plot: 15, Main road: 3, Mirpur 11/A, Dhaka-1216,</p> <p>Bangladesh.</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Officials</h2>
        <p>Info</p><p>Mail:*******</p> <p>Tel:*******</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Unofficials</h2>
       <p>Info</p> <p>abc@example.com</p> <p>017*******</p>
      </div>
    </div>
  </div>
</div>
<hr>
<div class="footer">
  <div align="center" class="socialbtns">
<ul>
<li><a href="#" class="fa fa-lg fa-facebook"></a></li>
<li><a href="#" class="fa fa-lg fa-twitter"></a></li>
<li><a href="#" class="fa fa-lg fa-google-plus"></a></li>
<li><a href="#" class="fa fa-lg fa-github"></a></li>
<li><a href="#" class="fa fa-lg fa-linkedin"></a></li>
<li><a href="#" class="fa fa-lg fa-instagram"></a></li>
<p style="margin-top: 15px;">Copyright © 2023 Agro Farming of Companies</p>
</ul>
</div>
</div>
</body>
</html>





