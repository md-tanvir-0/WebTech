<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="webtechregistration";
$conn = new mysqli($servername, $username, $password,$dbname);

if(isset($_POST["submit"])) {
    $id = $_POST["id"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $bio = $_POST["bio"];

    // Prepare and bind the update query
    $sql = "UPDATE buyer SET First_name='$first_name', Last_name='$last_name', Username='$username', Email='$email', Pass='$pass', Bio='$bio' WHERE ID='$id'";
        $result = $conn->query($sql);
    if ($result === TRUE) {
        // Update successful, redirect to admin panel
        header("Location: Admincustomer.php");
        exit();
    } else {
        // Update failed, display error message
        echo "Error updating record: ";
    }


}
$id = $_GET["edit"]; // Get the ID of the farmer from the URL parameter
$sql = "SELECT * FROM buyer WHERE ID='$id'";
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
       <h3>Edit Customer</h3>
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
        <button type="submit" name="submit" style="background-color:#45a049; color: white; width: 120px; height: 25px;" onclick="return confirm('Are you sure you want to Edit this record?');">Update</button>
        <button type="button" onclick="window.location.href='Admincustomer.php'">Cancel</button> 

    </form>
</body>
</html>