<!DOCTYPE html>
<html>
<head>
    <style>
       * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('https://mir-s3-cdn-cf.behance.net/project_modules/1400/fd262d143115083.6274258215d38.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        header {
            background-color: #48682B;
            color: #fff;
            display: flex;
            align-items: center;
            padding: 15px;
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
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
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
    <title>Buyer Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
    
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
           
                    <h3 > <img src="https://www.agrofarm.online/shop/image/cache/catalog/veg-img-270x280-eggplant-270x270.jpg"  width="150" height="160"></h3>    
                    <p>$2</p>
                    <button onclick="addToCart('Product 1', 2)">Add to Cart</button>
               
                <li>
                <h3><img src="https://www.agrofarm.online/shop/image/cache/catalog/melon%20-%20600x600-370x370.jpeg" width="150" height="160"></h3>
                    <p>$5</p>
                    <button onclick="addToCart('Product 2', 5)">Add to Cart</button>
                </li>
                <li>
                    <h3><img src=" https://chaldn.com/_mpimage/potato-regular-50-gm-1-kg?src=https%3A%2F%2Feggyolk.chaldal.com%2Fapi%2FPicture%2FRaw%3FpictureId%3D81244&q=best&v=1&m=400&webp=1" width="150" height="160"></h3>
                   <p>$5</p>
                 <button onclick="addToCart('Product 3', 5)">Add to Cart</button>
                </li>
                <li>
                  <h3><img src="https://chaldn.com/_mpimage/red-tomato-25-gm-500-gm?src=https%3A%2F%2Feggyolk.chaldal.com%2Fapi%2FPicture%2FRaw%3FpictureId%3D64361&q=best&v=1&m=400&webp=1" width="150" height="160"></h3>
                    <p>$3</p>
                    <button onclick="addToCart('Product 4', 7)">Add to Cart</button>
                </li>
                <li>
                <h3><img src="https://chaldn.com/_mpimage/badhakopi-cabbage-1-pcs?src=https%3A%2F%2Feggyolk.chaldal.com%2Fapi%2FPicture%2FRaw%3FpictureId%3D5740&q=best&v=1&m=400&webp=1" width="150" height="160"></h3>
                 <p>$7</p>
                    <button onclick="addToCart('Product 5', 7)">Add to Cart</button>
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
    </script>
</body>
</html>