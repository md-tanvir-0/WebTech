<?php
require_once('../models/dbmodel.php');
$id=$_REQUEST['edit'];
$result= editF($id);

?>
<!DOCTYPE html>
<html>
<head>
   <html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

  body{
            background: lightgray; 
        }
        label{
      font-family:'Georgia' ;
      font-size: 100%;
      font-weight:600;
      margin:10px ;
      width: 200px;
      display: inline-block;
      text-align: right;
  }
  input{
    width: 50%;
    height: 20px;
  }
  textarea{
    width: 50%;
    height: 50px;
  }


        form{  
  
    border: solid #00796b 2px;  
    width:80%;  
    border-radius: 2px;  
    margin:20px auto; 
    text-align: center; 
    background: white;  
    padding: 15px;  
}

header {
  background-color: #48682B;
  color: #fff;
  display: flex;
  align-items: center;
  padding: 10px;
}

header h2 {
  margin: 0;
  flex: 1;
  text-align: center;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav li {
  margin: 0 10px;
}

nav a {
  color: #fff;
  text-decoration: none;
}

main {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.products {
  flex-basis: 70%;
}

.products h2 {
  margin-top: 0;
}
.fr{  
    border: solid #00796b 2px;  
    width:80%;  
    border-radius: 2px;  
    margin:auto; 
    text-align: center; 
    background: white;  
    padding: 15px;  
}



</style>
  <title>Agro-Farming</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h2>Admin Panel</h2>
    <nav>
      <ul>
        <li><a href="AgroFarming.php">Logout</a></li>
      </ul>
    </nav>
  </header>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <ul class="nav nav-pills nav-stacked">
        <li style="margin-top: 22px; text-transform: uppercase; font-weight: bold;" class="active"><a href="#section1">Dashboard</a></li>
        <li><a style="background-color:#EEEEEE;color:black;" href="AdminF.php">Farmer</a></li>
        <li><a href="AdminC.php">Customer</a></li>
        <li><a href="AdminA.php">Agent</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
    <form method="post" action="../controllers/CRUD.php">
        <?php while ($row=$result->fetch_assoc()) { ?>
       <h3>Edit Farmer</h3>
        <input type="hidden" name="id" value="<?php echo $row["ID"]; ?>">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" value="<?php echo $row["First_name"]; ?>" required><br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" value="<?php echo $row["Last_name"]; ?>" required><br>
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo $row["Username"]; ?>" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $row["Email"]; ?>" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" value="<?php echo $row["Pass"]; ?>" required><br>
        <label for="bio">Bio:</label>
        <textarea name="bio" id="bio"><?php echo $row["Bio"]; ?></textarea><br>
        <button type="submit" name="submitF" style="background-color:#45a049; color: white; width: 120px; height: 30px;" onclick="return confirm('Are you sure you want to Edit this record?');">Update</button>
        <button type="button" onclick="window.location.href='AdminF.php'">Cancel</button> 
<?php } ?>
    </form>
</div>
</body>
</html>