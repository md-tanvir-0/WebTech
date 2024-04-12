
<<!DOCTYPE html>
<html>
<head>
  <style type="text/css">body {
  background: lightgray;
}

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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
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
</body>
</html>



<div class="form-group">
               <label>Name:</label>
               
               <input type = "text" class="form-control" name="fname" id="fname" placeholder="Enter your first Name"
               onfocus="this.placeholder=''" 
           onblur="this.placeholder='Enter your first Name'"><br>
       </div>
               <input class="form-control" style="margin-top: 5px;" type = "text" name="lname" placeholder="Enter your last Name"
               onfocus="this.placeholder=''" 
           onblur="this.placeholder='Enter your last Name'">
           <br><br>
                <div class="form-group">
                <label>Username:</label>
               
               <input type = "text" class="form-control" name="Username" placeholder="@username"
               onfocus="this.placeholder=''" 
           onblur="this.placeholder='@usaername'">
       </div>
           <br><br>
        <div class="form-group">
               <label>E-mail:</label>
               
               <input type = "text" class="form-control" name="email" placeholder="example@mail.com"
               onfocus="this.placeholder=''" 
           onblur="this.placeholder='example@mail.com'">
       </div>
                  <br><br>
          <div class="form-group">
          <label> Password:</label>
          
      <input type="password" class="form-control" name="Password">
      </div><br><br>
      <div class="form-group">
      <label>Short Bio:</label>
      <textarea name="bio" class="form-control" rows="4" cols="50"></textarea></div><br><br>
      
      <label>ID Card:</label>
        <input type="file" name="img_upload"><br><br>
        


      <label>Sign up As:</label>  
      <label style="margin-left: 0px; width: 120px;"><input type="radio" name="Customer" value="customer"> Farmer</label>
<label style="margin-left: 0px; width: 120px;"><input type="radio" name="Customer" value="buyer"> Customer</label><br><br>
        

      <input type="Submit" class="submit" name="img_submit">
      <button class="submitC" type="button" onclick="window.location.href='Login.php'">Cancel</button>

    </form>
    </div>