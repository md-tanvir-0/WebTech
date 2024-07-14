<!DOCTYPE html>

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
        <li><a href="AdminA.php">Agent</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p>Some text..</p>
      </div>
  
</body>
</html>
