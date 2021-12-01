
const getCart = document.querySelector('.headerr__active-list.cart');
const getShadow = document.querySelector('.cart-shadow');
const modal = document.querySelector('.modal');
const listcart = document.querySelector('.content__cart-items')
const carttotal = document.querySelector('.cart-total')
const getcartalert = document.querySelector('.emty-cart-checkout')
const iconSearch = document.querySelector('.header__active-icon.search')
const searchBox = document.querySelector('.search-box')
const closeSearch = document.querySelectorAll('.search-close-container')
const tableOrder = document.querySelector('.tr-content')
const orderEmty = document.querySelector('.myorder-empty')

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
if (tableOrder L == null) {
  console.log('1')
  // tableOrder.style.display="none"
  // orderEmty.style.display="block"
}

