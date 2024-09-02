function addToCart(item, price) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push({item, price});
    localStorage.setItem('cart', JSON.stringify(cart));
    alert('Item added to cart!');
    updateCartCount();
}

function updateCartCount() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let cartCount = document.getElementById('cart-count');
    if (cartCount) {
        cartCount.textContent = cart.length;
    }
}

document.addEventListener('DOMContentLoaded', updateCartCount);