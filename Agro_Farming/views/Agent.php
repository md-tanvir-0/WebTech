<!DOCTYPE html>

<html>
<head>
<style>

body {
  background-color: #ffffff;
  background-image: url(https://getwallpapers.com/wallpaper/full/d/d/2/425768.jpg);
  background-size: cover;
  background-repeat: no-repeat;
}

header {
	background-color: #48682B;
	color: #fff;
	display: flex;
	align-items: center;
	padding: 10px;
}

header h1 {
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
	flex-basis: 60%;
}

.products h2 {
	margin-top: 0;
}

.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#0C9;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}


.wrapper{
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

a{
  display: block;
  width: 200px;
  height: 40px;
  line-height: 40px;
  font-size: 18px;
  font-family: sans-serif;
  text-decoration: none;
  color: #333;
  border: 2px solid #333;
  letter-spacing: 2px;
  text-align: center;
  position: relative;
  transition: all .35s;
}

a span{
  position: relative;
  z-index: 2;
}

a:after{
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  width: 0;
  height: 100%;
  background: #ffffff ;
  transition: all .35s;
}

a:hover{
  color: #000;
  background-color: #fff;
}










.button_1 {
  background-color: #000;
  color: #fff;
  font-size: 14px;
  font-weight: bold;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s;
}

.button_1:hover {
  background-color: #fff;
  color: #000;
}

</style>
	<title>Agro-Farming</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Agro-Farming</h1>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Cart</a></li>
				<li><a href="AgroFarming.php">Logout</a></li>
			</ul>
		</nav>
	</header>
	<main>
	<form>
  <section class="products">
    <h2>Orders</h2>
    <form>
      <label for="orders">Order Numbers:</label>
      <br>
      <br>
      <select id="orders" name="orders">
        <option value="Total">Total</option>
        <option value="Pending">Pending</option>
        <option value="Complete">Complete</option>
      </select>
      <br>
      <br>
      <button class="button_1">Check</button>
    </form>
    <br>
    <br>
    <div id="resultbox"></div>
    <br>
    <br>
    <textarea id="orderdetails" rows="10" cols="30"></textarea>
  </section>
</form>
		</section>
		<section class="">
        <fieldset>
			<legend><h2> Farmers </h2></legend>


			<button class="button_1">Dinajpur</button>
				<br><br>
				<button class="button_1">Rangpur</button>
				<br><br>
				<button class="button_1">Thakurgaon</button>
				<br><br>
				<button class="button_1">Tangail</button>
				<br><br>
				<button class="button_1">Rajshahi</button>
				<br><br>
				<button class="button_1">Bogura</button>

			
		</section>





		<section class="">
        <fieldset>
			<legend><h2>Buyers</h2></legend>
			<ul>
				<li>
					<h3>Select buyer</h3>
					
				
				<button class="button_1">Foreign  Buyer</button>
				<br><br>
				<button class="button_1">Domestic Buyer</button>
				<br><br>
				<button class="button_1">Show all</button>
				</li>
				<br>
			

				 
		</section>
	</main>

</body>
</html>
