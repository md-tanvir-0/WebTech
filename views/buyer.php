<!DOCTYPE html>
<html>
<head>
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
	padding:15px;
}

.logo {
	flex: 1;
}

.logo a {
	color: #fff;
	text-decoration: none;
}

nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
	display: flex;
}

nav li {
	margin
}
    </style>
	<title>Buyer Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="logo">
			<a href="#">E-Commerce Website</a>
		</div>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Cart</a></li>
				<li><a href="#">Login</a></li>
			</ul>
		</nav>
	</header>
	<main>
        <form>
		   <section class="product-list">
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
                <hr>

				<li>
					
					<h3>Product 4</h3>
					<p>$150</p>
					<button>Add to Cart</button>
				</li>
                <hr>

				<li>
					
					<h3>Product 5</h3>
					<p>$200</p>
					<button>Add to Cart</button>
				</li>
			</ul>
		</section>
      </form>

		<section class="cart">
			<h2>Your Cart</h2>
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
