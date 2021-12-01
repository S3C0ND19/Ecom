
const getCart = document.querySelector('.headerr__active-list.cart');
const getShadow = document.querySelector('.cart-shadow');
const modal = document.querySelector('.modal');
const listcart = document.querySelector('.content__cart-items')
const carttotal = document.querySelector('.cart-total')
const getcartalert = document.querySelector('.emty-cart-checkout')
const iconSearch = document.querySelector('.header__active-icon.search')
const searchBox = document.querySelector('.search-box')
const closeSearch = document.querySelectorAll('.search-close-container')
const tableOrder = document.querySelectorAll('.table-order')
const orderEmty = document.querySelectorAll('.myorder-empty')

iconSearch.onclick = function () {
  searchBox.classList.toggle('search-box-block')
}
closeSearch.forEach (function(e){
  e.addEventListener('click', function(){
    searchBox.classList.toggle('search-box-block')
  })
})

getCart.onclick = function (){
  getShadow.classList.toggle('open')
  modal.classList.toggle('open')
}

if(listcart == null){
  carttotal.style.display="none"
  getcartalert.style.display="block"
}
if (tableOrder.textContent == null) {
  orderEmty.style.display="block"
}

