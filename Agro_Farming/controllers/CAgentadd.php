<?php
require_once ('../models/dbmodel.php');
require_once ('../views/AgentAdd.php');

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['Username']) || empty($_POST['Password'])) {
      echo '<span class="error">Please fill up all required fields</span>';
  } else {
      $Username = $_POST['Username'];
      $Password = $_POST['Password'];

      agentadd($Username, $Password);
  }
}

?>