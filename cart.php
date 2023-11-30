<!-- cart.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- External CSS -->
  <link rel="stylesheet" href="./css/style.css" />
  <!-- Font Awesome-->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
  />
  <!-- Swiper -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
  />
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

  <link rel="icon" type="image/svg+xml" href="./img/bookfavicon.svg" />
  <title>BookEngine </title>
</head>
<body>
       <!-- Header Start  -->
       <header class="header">
        <!-- Header 1 Start  -->
        <div class="header-1">
          <a href="#" class="logo"><i class="fas fa-book"></i> BookEngine</a>
          <form action="" class="search-form">
            <input
              type="search"
              name=""
              placeholder="Search..."
              id="search-box"
            />
            <label for="search-box" type="submit" class="fas fa-search"></label>
          </form>
          <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-heart-circle-check"></a>
            <a href="cart.php" class="fas fa-shopping-cart"></a>
            <a id="login-btn" class="fa-solid fa-user" href="login.php"></a>
          </div>
        </div>
        <!-- Header 1 End -->
  
        <!-- Header 2 Start -->
        <div class="header-2">
          <div class="navbar">
            <a class="active" href="index.php">Home</a>
            <a href="#about">About</a>
            <a href="#populer">Popular</a>
            <a href="#member">Member</a>
            <a href="#new">New</a>
            <a href="#reviews">Reviews</a>
            <a href="#blogs">Blogs</a>
          </div>
        </div>
        <!-- Header 2 End -->
      </header>
      <!-- Header End -->
  
      <!-- Bottom Navbar Start -->
      <div class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#about" class="fas fa-people-group"></a>
        <a href="#populer" class="fas fa-fire"></a>
        <a href="#member" class="fas fa-user-plus"></a>
        <a href="#new" class="fas fa-book-bookmark"></a>
        <a href="#reviews" class="fas fa-star"></a>
        <a href="#blogs" class="fas fa-newspaper"></a>
      </div>
      <!-- Bottom Navbar End -->
      <section>
        <h2 id="title-sb">Your Shopping Bag</h2>
        <div id="bagContent"></div>
        <p id="totalPrice">Total Price: $0.00</p>
        <button class="a2c_btn" onclick="checkout()">Proceed to Checkout</button>
      </section>

  <script>

    window.addEventListener('load', function () {
      // Retrieve the items from the bag in local storage
      const cart = JSON.parse(localStorage.getItem('cart')) || [];

      // Display the items in the bag
      const cartContainer = document.getElementById('bagContent');
      if (cart.length > 0) {
        cart.forEach(item => {
        // Extract the numerical part of the price and convert it to a valid number
        const numericPrice = parseFloat(item.price.replace(/[^0-9]/g, ''));
    cartContainer.innerHTML += `
    <div class="bag-item">
      <img src="${item.image}" alt="${item.name}" class="bag-item-img">
      <div class="bag-item-details">
        <h3>${item.name}</h3>
        <p>Quantity: 
          <button class="inc-btn" onclick="decreaseQuantity('${item.name}')">-</button>
          <span id="quantity-${item.name}">${item.quantity || 1}</span>
          <button class="dec-btn" onclick="increaseQuantity('${item.name}')">+</button>
        </p>
        <p>Price:Rs${numericPrice.toFixed(2)}</p>
        <span class="material-symbols-outlined favorite-icon" onclick="toggleFavorite(this)">favorite</span>
        <button onclick="removeItem('${item.name}')">
          <span class="material-symbols-outlined delete-icon">delete</span>
        </button>                                  
      </div>
    </div>
  `;
});
          calculateTotalPrice(cart);
      } else {
          cartContainer.innerHTML = '<p>Your shopping bag is empty.</p>';
      }
  });
    
    
       function calculateTotalPrice(cart) {
  const totalPriceElement = document.getElementById('totalPrice');
  const total = cart.reduce((acc, item) => {
    // Extract the numerical part of the price and convert it to a valid number
    const numericPrice = parseFloat(item.price.replace(/[^0-9]/g, ''));
    return acc + numericPrice * item.quantity;
  }, 0);
  totalPriceElement.textContent = `Total Price: ${total.toFixed(2)}`;
}

        function increaseQuantity(name) {
            const quantityElement = document.getElementById(`quantity-${name}`);
            const currentQuantity = parseInt(quantityElement.textContent);
            quantityElement.textContent = currentQuantity + 1;
            updateLocalStorageQuantity(name, currentQuantity + 1);
            calculateTotalPrice(JSON.parse(localStorage.getItem('cart')) || []);
        }

        function decreaseQuantity(name) {
            const quantityElement = document.getElementById(`quantity-${name}`);
            const currentQuantity = parseInt(quantityElement.textContent);
            if (currentQuantity > 1) {
                quantityElement.textContent = currentQuantity - 1;
                updateLocalStorageQuantity(name, currentQuantity - 1);
                calculateTotalPrice(JSON.parse(localStorage.getItem('cart')) || []);
            }
        }

        function updateLocalStorageQuantity(name, newQuantity) {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const updatedBag = cart.map(item => {
                if (item.name === name) {
                    return { ...item, quantity: newQuantity };
                }
                return item;
            });
            localStorage.setItem('cart', JSON.stringify(updatedBag));
        }

    function removeItem(name) {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const updatedcart = cart.filter(product => product.name !== name);
        localStorage.setItem('cart', JSON.stringify(updatedcart));
        window.location.reload(); // Refresh the page to reflect the updated bag
    }
  </script>

</body>
</html>