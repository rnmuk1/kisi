let cartIcon = document.querySelector('#oncart');
let cart= document.querySelector('.dropdown-menu');
let closeCart = document.querySelector('.bt-close');

cartIcon.onclick = () =>{
    cart.classList.add("active")
};

closeCart.onclick = () =>{
    cart.classList.remove("active")
};
