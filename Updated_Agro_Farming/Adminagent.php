<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="webtechregistration";
$conn = new mysqli($servername, $username, $password,$dbname);

      $sql ="Select * from agent";
      $result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
    <style type="text/css">
        body{
            background: lightgray; 
            margin: 0;
            padding: 0;
           font-family: Arial, sans-serif;
        }
    .topnav {
  overflow: hidden;
  background-color: #48682B;
}

  .topnav a {
  float: right;
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
        .fr{  
    border: solid #00796b 2px;  
    width:25%;  
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
</head>
<body>
    <div class="topnav">
    <a href="AgroFarming.php">Logout</a>
</div>
    <form class="fr" method="get" action="AdminAdelete.php">
       <h2>Agent</h2>
       <button style="margin-bottom:10px;" type="button" onclick="window.location.href='AdminAadd.php'">Add Agent</button><br>
     <table border="1">
        <tr>
         <th>ID</th>
         <th>AG_Username</th>
         <th>AG_Pass</th>
         <th>Action</th>
     </tr>
     <?php while ($row=$result->fetch_assoc()) { ?>
     <tr>
        <td><?php echo $row["ID"]; ?></td>
         <td><?php echo $row["AG_Username"]; ?></td>
         <td><?php echo $row["AG_Pass"]; ?></td>
         <td><button style="background-color: #f44336;" name="delete"
                            onclick="return confirm('Are you sure you want to delete this record?');"
                            value="<?php echo $row["ID"]; ?>">Delete
                    </button>
                </form>
            <form method="get" action="AdminAedit.php"><button name="edit" value="<?php echo $row["ID"]; ?>">Edit</button></form>
        </td>
     </tr>
     
 <?php } ?>
     </table>
     <button type="button" onclick="window.location.href='AdminPanel.php'">Back</button><br>
    
</body>
</html>