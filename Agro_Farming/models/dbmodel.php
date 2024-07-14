<?php
require_once('db.php'); 

function auth1($Username,$Password)
{
    $conn=getConnection();

// Check if the user exists and the password is correct
$sql = "SELECT * FROM registration WHERE Username = '$Username' AND Pass = '$Password'";
$result=mysqli_query($conn,$sql);
  $cout=mysqli_num_rows($result);
  if($cout==1)
  {
   return true;
  }
  else
  {
   return false;
  }
}
function auth2($Username,$Password)
{
    $conn=getConnection();

$sql = "SELECT * FROM buyer WHERE Username = '$Username' AND Pass = '$Password'";
$result=mysqli_query($conn,$sql);
  $cout=mysqli_num_rows($result);
  if($cout==1)
  {
   return true;
  }
  else
  {
   return false;
  }
}

function auth3($Username,$Password)
{
    $conn=getConnection();

$sql = "SELECT * FROM admin WHERE A_Username = '$Username' AND Password = '$Password'";
$result=mysqli_query($conn,$sql);
  $cout=mysqli_num_rows($result);
  if($cout==1)
  {
   return true;
  }
  else
  {
   return false;
  }
}
function auth4($Username,$Password)
{
    $conn=getConnection();

$sql = "SELECT * FROM agent WHERE AG_Username = '$Username' AND AG_Pass = '$Password'";
$result=mysqli_query($conn,$sql);
  $cout=mysqli_num_rows($result);
  if($cout==1)
  {
   return true;
  }
  else
  {
   return false;
  }
}







function insertRegistrationData($fname, $lname, $Username, $email, $Password, $bio, $user_type)
{
    $conn=getConnection();

    // Check for errors
    
        // Insert the data into the database
        if ($user_type == "customer") {
            // Insert customer data into the registration table
            $sql_check = "SELECT * FROM registration WHERE Username = '$Username'";
            $result_check = $conn->query($sql_check);

            if ($result_check->num_rows > 0) {
                // Username already exists in registration table, display error message
                return 'Username already exists';
            } else {
                $sql = "INSERT INTO registration (First_name, Last_name, Username, Email, Pass, Bio) VALUES ('$fname','$lname','$Username','$email','$Password','$bio')";
                $registration_result = $conn->query($sql);
                echo '<span class="error">successfull</span>';
            }
        } else {
            $sql_check = "SELECT * FROM buyer WHERE Username = '$Username'";
            $result_check = $conn->query($sql_check);

            if ($result_check->num_rows > 0) {
                // Username already exists in buyer table, display error message
                return 'Username already exists';
            } else {
                $sql = "INSERT INTO buyer (First_name, Last_name, Username, Email, Pass, Bio) VALUES ('$fname','$lname','$Username','$email','$Password','$bio')";
                $buyer_result = $conn->query($sql);
                echo '<span class="error">successfull</span>';
            }
        }
    }


function agentadd($Username, $Password)
{
    $conn = getConnection(); 

    // Insert the data into the database
    $sql_check = "SELECT * FROM agent WHERE AG_Username = '$Username'";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows > 0) {
        // Username already exists in the registration table, display an error message
        echo '<span class="error">Username already exists</span>';
    } else {
        $sql = "INSERT INTO agent (AG_Username, AG_Pass) VALUES ('$Username','$Password')";
        $registration_result = $conn->query($sql);
        // Redirect the user to a success page
        header("Location:../views/AdminA.php");
        exit;
    }
}





function Farmer()
{
   $conn=getConnection();
   $sql ="Select * from registration";
   return $sql;

}
function FarmerD($id)
{
   $conn=getConnection(); 
   $deleteSql = "DELETE FROM registration WHERE ID='$id'";
   $result=mysqli_query($conn,$deleteSql);
   return $result;
}
function editF($id)
{
   $conn=getConnection(); 
   $sql="select * from registration where ID='{$id}'";
   $result=mysqli_query($conn,$sql);
   return $result;
}
function updateF($id,$first_name,$last_name,$username,$email,$pass,$bio)
{
   $conn=getConnection(); 
   $sql = "UPDATE registration SET First_name='{$first_name}', Last_name='{$last_name}', Username='{$username}', Email='{$email}', Pass='{$pass}', Bio='{$bio}' WHERE ID='{$id}'";
   $result=mysqli_query($conn,$sql);
   return $result;
}
function Customer()
{
   $conn=getConnection();
   $sql ="Select * from buyer";
   return $sql;

}
function CustomerD($id)
{
   $conn=getConnection(); 
   $deleteSql = "DELETE FROM buyer WHERE ID='$id'";
   $result=mysqli_query($conn,$deleteSql);
   return $result;
}
function editC($id)
{
   $conn=getConnection(); 
   $sql="select * from buyer where ID='{$id}'";
   $result=mysqli_query($conn,$sql);
   return $result;
}
function updateC($id,$first_name,$last_name,$username,$email,$pass,$bio)
{
   $conn=getConnection(); 
   $sql = "UPDATE buyer SET First_name='{$first_name}', Last_name='{$last_name}', Username='{$username}', Email='{$email}', Pass='{$pass}', Bio='{$bio}' WHERE ID='{$id}'";
   $result=mysqli_query($conn,$sql);
   return $result;
}
function Agent()
{
   $conn=getConnection();
   $sql ="Select * from agent";
   return $sql;

}
function AgentD($id)
{
   $conn=getConnection(); 
   $deleteSql = "DELETE FROM agent WHERE ID='$id'";
   $result=mysqli_query($conn,$deleteSql);
   return $result;
}
function editA($id)
{
   $conn=getConnection(); 
   $sql="select * from agent where ID='{$id}'";
   $result=mysqli_query($conn,$sql);
   return $result;
}
function updateA($id,$username,$pass)
{
   $conn=getConnection(); 
   $sql = "UPDATE agent SET AG_Username='{$username}', AG_Pass='{$pass}' WHERE ID='$id'";
   $result=mysqli_query($conn,$sql);
   return $result;
}



?>