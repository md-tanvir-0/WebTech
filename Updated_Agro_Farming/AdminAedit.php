<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="webtechregistration";
$conn = new mysqli($servername, $username, $password,$dbname);

if(isset($_POST["submit"])) {
    $id = $_POST["id"];
    $username = $_POST["username"];
    $pass = $_POST["password"];

    // Prepare and bind the update query
    $sql = "UPDATE agent SET AG_Username='$username', AG_Pass='$pass' WHERE ID='$id'";
        $result = $conn->query($sql);
    if ($result === TRUE) {
        // Update successful, redirect to admin panel
        header("Location: Adminagent.php");
        exit();
    } else {
        // Update failed, display error message
        echo "Error updating record: ";
    }


}
$id = $_GET["edit"]; // Get the ID of the farmer from the URL parameter
$sql = "SELECT * FROM agent WHERE ID='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$conn->close();
   

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
    width:38%;  
    border-radius: 2px;  
    margin:20px auto; 
    text-align: center; 
    background: white;  
    padding: 15px;  
}
    </style>
</head>
<body>
    <form method="post" action="">
       <h3>Edit Agent</h3>
        <input type="hidden" name="id" value="<?php echo $row["ID"]; ?>">
        <label for="username">AG_Username:</label>
        <input type="text" name="username" value="<?php echo $row["AG_Username"]; ?>" required><br>
        <label for="password">AG_Pass:</label>
        <input type="password" name="password" value="<?php echo $row["AG_Pass"]; ?>" required><br>
        <button type="submit" name="submit" style="background-color:#45a049; color: white; width: 120px; height: 25px;" onclick="return confirm('Are you sure you want to Edit this record?');">Update</button>
        <button type="button" onclick="window.location.href='Adminagent.php'">Cancel</button> 

    </form>
</body>
</html>