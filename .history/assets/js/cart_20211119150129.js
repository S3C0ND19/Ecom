
let getCart = document.querySelector('.headerr__active-list.cart');
let getShadow = document.querySelector('.cart-shadow');
let modal = document.querySelector('.modal');
let id = document.querySelectorAll('.id-hidden')
id.forEach(function (e){
  console.log(e.value);
})
// function hideBuyTickets(){

// }
// getShadow.addEventListener('click',hideBuyTickets);
getCart.onclick = function (){
  getShadow.classList.toggle('open')
  modal.classList.toggle('open')
}
