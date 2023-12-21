const cartItems = document.getElementById("cart-items");
        const clearCartBtn = document.getElementById("clear-cart");
        const addToCartBtns = document.querySelectorAll(".add-to-cart");
        
        let cart = [];
        
        // Add item to cart
        function addToCart(name, price) {
          cart.push({ name, price });
          document.getElementById("totalItems").textContent = cart.length;
          renderCart();
        }
        
        // Remove item from cart
        function removeFromCart(index) {
          document.getElementById("totalItems").textContent = cart.length - 1;
          cart.splice(index, 1);
          
          renderCart();
        }
        
        // Clear cart
        function clearCart() {
          document.getElementById("totalItems").textContent = cart.length - cart.length;
          cart = [];
          renderCart();
        }
        
        // Render cart items
        function renderCart() {
          cartItems.innerHTML = "";
        
          cart.forEach((item, index) => {
            const li = document.createElement("li");
            li.textContent = `${item.name} - $${item.price}`;
        
            const deleteBtn = document.createElement("button");
            deleteBtn.className = "btn btn-danger";
            deleteBtn.textContent = "X";
            deleteBtn.addEventListener("click", () => removeFromCart(index));
        
            li.appendChild(deleteBtn);
            cartItems.appendChild(li);
          });
        }
        
        // Handle add to cart button click
        addToCartBtns.forEach((btn) => {
          btn.addEventListener("click", () => {
            const name = btn.getAttribute("data-name");
            const price = parseFloat(btn.getAttribute("data-price"));
            addToCart(name, price);
          });
        });
        
        // Handle clear cart button click
        clearCartBtn.addEventListener("click", () => clearCart());
        