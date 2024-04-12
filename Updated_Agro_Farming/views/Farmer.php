<!DOCTYPE html>
<html>
<head>
    <style>
       * {
            box-sizing: border-box;
        }

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
            margin-right: 10px;
        }

        main {
            max-width: 1200px;
	margin: 0 auto;
	padding: 20px;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
        }

        .product-list {
            flex: 1;
            margin-right: 20px;
        }

        .product-list h2 {
            margin-top: 0;
        }

        .product-list ul {
            padding: 0;
        }

        .product-list li {
            margin-bottom: 20px;
        }

        .product-list h3,
        .product-list p {
            margin: 0;
        }

        .cart {
            flex: 1;
        }

        .cart h2 {
            margin-top: 0;
        }

        .cart ul {
            padding: 0;
        }

        .cart li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .cart h3,
        .cart p {
            margin: 0;
        }

        .cart p.total {
            font-weight: bold;
            margin-top: 10px;
        }

        form label {
            display: block;
            margin-top: 10px;
        }

        form select {
            margin-top: 5px;
        }

        form button {
            margin-top: 10px;
        }

        @media screen and (max-width: 600px) {
            .product-list,
            .cart {
                flex: 100%;
                margin-right: 0;
            }
        }
    </style>
    <title>Farmer Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- Header section -->
    <header>
    <div class="logo">
            <a href="Farmer.php"  >Agro Farming</a>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="Login.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main section -->
    <main>
        <!-- Product list section -->
        <section class="product-list">
        <h2>Our Products</h2>
            <ul>
                <li>
                
                    <h3><img src="https://cdn.shopify.com/s/files/1/0920/8638/products/image_0eec4973-44af-4307-86d6-39a8f2ebd1d1_237x230.jpg?v=1604499333" width="150" height="160"></h3>
                    <p>$35</p>
                    <button onclick="addToCart('Product 1',35)">Add to Cart</button>
                </li>
                <li>
                <h3><img src="https://cdn.shopify.com/s/files/1/0920/8638/products/aroma_236x236.jpg?v=1668165195" width="150" height="160"></h3>
                    <p>$15</p>
                    <button onclick="addToCart('Product 2', 15)">Add to Cart</button>
                </li>
                <li>
                <h3><img src="https://cdn.shopify.com/s/files/1/0920/8638/products/BoroF1_2_202x237.jpg?v=1656663847" width="150" height="160"></h3>
                   <p>$10</p>
                 <button onclick="addToCart('Product 3', 10)">Add to Cart</button>
                </li>
                <li>
                <h3><img src="https://cdn.shopify.com/s/files/1/0920/8638/products/SarpanHybridBrinjal-50_231x236.jpg?v=1594475666" width="150" height="160"></h3>
                    <p>$7</p>
                    <button onclick="addToCart('Product 4', 7)">Add to Cart</button>
                </li>
                <li>
                <h3><img src="https://cdn.shopify.com/s/files/1/0722/2059/products/vnr-145-pouch_455x637_0b3755ec-589a-4e61-80d9-9dab79b579e9_200x.webp?v=1682337640" width="150" height="160"></h3>
                 <p>$12</p>
                    <button onclick="addToCart('Product 5', 12)">Add to Cart</button>
                </li>
            </ul>
        </section>

        
        <section class="cart">
            <fieldset>
            <legend><h2>Your Cart</h2></legend>
            <ul id="cart-items">
             
            </ul>
            <p class="total" id="cart-total">Total: $0</p>
          <form onsubmit="return validateCheckoutForm()">
          <form onsubmit="return validateCheckoutForm()" id="checkout-form">

            <label for="payment">Select a payment method:</label>
                <select id="payment" name="payment">
            <option value="credit_card">Credit Card</option>
           <option value="paypal">PayPal</option>
                 <option value="bitcoin">Bitcoin</option>
             </select>
             <button type="submit">Checkout</button>
          </form>
            <form onsubmit="return applyCoupon()">
               
          </form>
            
        </section>
    </main>

    
    <script>
        let cartItems = [];
        let cartTotal = 0;

        
        function addToCart(productName, price) {
            
  const existingItem = cartItems.find(item => item.name === productName);
        if (existingItem) {
         existingItem.quantity += 1;
         } else {
           cartItems.push({ name: productName, price: price, quantity: 1 });
            }

            cartTotal += price;
            updateCart();
        }

       
        function updateCart() {
            const cartItemsContainer = document.getElementById("cart-items");
            const cartTotalElement = document.getElementById("cart-total");

            // Clear previous cart items
            cartItemsContainer.innerHTML = "";

            // Add new cart items
            for (let i = 0; i < cartItems.length; i++) {
                const item = cartItems[i];
                const listItem = document.createElement("li");
                listItem.innerHTML = `
                    <h3>${item.name}</h3>
                    <p>$${item.price}</p>
                    <button onclick="increaseQuantity(${i})">+</button>
                    <span>${item.quantity}</span>
                    <button onclick="decreaseQuantity(${i})">-</button>
                `;
                cartItemsContainer.appendChild(listItem);
            }

            // Update cart total
            cartTotalElement.textContent = `Total: $${cartTotal}`;
        }

        // Function to increase the quantity of an item in the cart
        function increaseQuantity(index) {
            const item = cartItems[index];
            item.quantity += 1;
            cartTotal += item.price;
            updateCart();
        }

        // Function to decrease the quantity of an item in the cart
        function decreaseQuantity(index) {
            const item = cartItems[index];
            if (item.quantity > 1) {
                item.quantity -= 1;
                cartTotal -= item.price;
                updateCart();
            }
        }

        // Function to apply a coupon to the cart
        function applyCoupon() {
            const couponCode = prompt("Enter coupon code:");

            // Check if coupon code is valid and apply discount
            // Example implementation: checkCouponCode(couponCode) returns the discount amount
            const discount = checkCouponCode(couponCode);
            if (discount > 0) {
                cartTotal -= discount;
                updateCart();
                alert("Coupon applied successfully!");
            } else {
                alert("Invalid coupon code. Please try again.");
            }

            return false;
        }

        // Function to save the cart for later
        function saveCart() {
            // Send cartItems array to the server or store it in local storage
            // Example implementation: saveCartToServer(cartItems)
            saveCartToServer(cartItems);
            alert("Cart saved for later!");
        }

        // Function to share the cart with others
        function shareCart() {
            // Generate a unique URL for the current cart and share it with others
            // Example implementation: generateCartURL(cartItems) returns the URL
            const cartURL = generateCartURL(cartItems);
            alert(`Share this cart with others: ${cartURL}`);
        }

        // Function to track the order status
        function trackOrderStatus(orderId) {
            // Implement order tracking functionality based on the orderId
            // Example implementation: redirect to the order tracking page
            window.location.href = `/order-tracking?orderId=${orderId}`;
        }

        // Function to provide customer reviews for products
        function provideProductReview(productId) {
            // Implement product review functionality based on the productId
            // Example implementation: redirect to the product review page
            window.location.href = `/product-review?productId=${productId}`;
        }

        // Function to validate the checkout form
        function validateCheckoutForm() {
            const paymentMethod = document.getElementById("payment").value;

            if (cartItems.length === 0) {
                alert("Your cart is empty. Please add items before checking out.");
                return false;
            }

            if (paymentMethod === "") {
                alert("Please select a payment method.");
                return false;
            }

            // Process the payment and complete the checkout
            // Example implementation: processPayment(paymentMethod)
            processPayment(paymentMethod);

            return true;
        }
        function processPayment(paymentMethod) {
    setTimeout(() => {
        cartItems = [];
        cartTotal = 0;
        updateCart();
        alert("Thank you for your purchase!");
        document.getElementById("checkout-form").reset(); // Optional: Reset the form after successful payment
    }, 2000);

    return false; // Prevent form submission
}

    </script>
</body>
</html>