
const getCart = document.querySelector('.headerr__active-list.cart');
const getShadow = document.querySelector('.cart-shadow');
const modal = document.querySelector('.modal');
const id = document.querySelectorAll('.id-hidden')
const listcart = document.querySelector('.content__cart-items')
const carttotal = document.querySelector('.cart-total')
const getcartalert = document.querySelector('.emty-cart-checkout')
const cart = document.querySelectorAll('.modal-product-item li')
const cartemty = document.querySelector('.modal-cart-empty')


getCart.onclick = function (){
  getShadow.classList.toggle('open')
  modal.classList.toggle('open')
}
if(cart.textContent == ''){
  cartemty.classList.add('block')
}
if(cart.textContent != ''){
  cartemty.classList.remove('block')
}
if(listcart == null){
  carttotal.style.display="none"
  getcartalert.style.display="block"
}
