<?php
require_once('../models/dbmodel.php');
$conn = getConnection();
$sql= Agent();
$result = $conn->query($sql);

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

  body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
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
    width:30%;  
    border-radius: 2px;  
    margin:20px auto; 
    text-align: center; 
    background: white;  
    padding: 15px;  
}
button{
    margin-top: 2px;
    background-color:#45a049; 
    color: white; 
    width: 100px; 
    height: 30px;
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
        <li><a href="AdminF.php">Farmer</a></li>
        <li><a href="AdminC.php">Customer</a></li>
        <li><a style="background-color:#EEEEEE;color:black;" href="AdminA.php">Agent</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
    <form class="fr" method="get" action="../controllers/CRUD.php">
       <h2>Agent</h2>
       <button style="margin-bottom:10px;" type="button" onclick="window.location.href='AgentAdd.php'">Add Agent</button><br>
     <table border="1">
        <tr>
         <th>ID</th>
         <th>Username</th>
         <th>Pass</th>
         <th>Action</th>
     </tr>
     <?php while ($row=$result->fetch_assoc()) { ?>
     <tr>
        <td><?php echo $row["ID"]; ?></td>
         <td><?php echo $row["AG_Username"]; ?></td>
         <td><?php echo $row["AG_Pass"]; ?></td>
         <td><button style="background-color: #f44336;" name="deleteA"
                            onclick="return confirm('Are you sure you want to delete this record?');"
                            value="<?php echo $row["ID"]; ?>">Delete
                    </button>
                </form>
            <form method="get" action="AgentE.php"><button name="edit" value="<?php echo $row["ID"]; ?>">Edit</button></form>
        </td>
     </tr>
     
 <?php } ?>
     </table>
     <button type="button" onclick="window.location.href='AdminPanel.php'">Back</button><br>
      </div>
</body>
</html>