
let getCart = document.querySelector('.headerr__active-list.cart');
let getShadow = document.querySelector('.cart-shadow');
let modal = document.querySelector('.modal');
let id = document.querySelectorAll('.id-hiddden')
// function hideBuyTickets(){

// }
// getShadow.addEventListener('click',hideBuyTickets);
getCart.onclick = function (){
  getShadow.classList.toggle('open')
  modal.classList.toggle('open')
}
