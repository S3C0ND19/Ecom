
const cart = document.querySelector('.modal-product-list')
const cartemty = document.querySelector('.modal-cart-empty')
if(cart == null){
    cartemty.classList.add('block')
  }
  if(cart.textContent != ''){
    cartemty.classList.remove('block')
  }