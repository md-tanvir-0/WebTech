<!DOCTYPE html>

<html>
<head>
<style>body {
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
			<h2>Our Products</h2>
			<ul>
				<li>
					
					<h3>Product 1</h3>
					<p>$50</p>
					<button>Add to Cart</button>
				</li>
                <hr>
				<li>
					
					<h3>Product 2</h3>
					<p>$75</p>
					<button>Add to Cart</button>
				</li>
                <hr>
				<li>
					
					<h3>Product 3</h3>
					<p>$100</p>
					<button>Add to Cart</button>
				</li>
			</ul>
		
       </form>
		</section>
		<section class="cart">
        <fieldset>
			<legend><h2>Your Cart</h2></legend>
			<ul>
				<li>
					<h3>Product 1</h3>
					<p>$50</p>
				</li>
				<li>
					<h3>Product 2</h3>
					<p>$75</p>
				</li>
			</ul>
			<p>Total: $125</p>
			<form>
				<label for="payment">Select a payment method:</label>
				<select id="payment" name="payment">
					<option value="credit_card">Credit Card</option>
					<option value="paypal">PayPal</option>
					<option value="bitcoin">Bitcoin</option>
				</select>
				<button>Checkout</button>
			</form>
		</section>
	</main>
</body>
</html>
