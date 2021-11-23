
let getCart = document.querySelector('.headerr__active-list.cart');
let getShadow = document.querySelector('.cart-shadow');
let modal = document.querySelector('.modal');
let id = document.querySelectorAll('.id-hidden')
let headerItem = document.querySelector('.header__nav-items')
let headerList = document.querySelectorAll('.header__nav-lists')
let  headerLink =  document.querySelectorAll('.header__nav-link')


headerList.forEach(el =>{
  el.addEventListener('click',function(e){
    headerLink.classList.add('active')
  })
})

getCart.onclick = function (){
  getShadow.classList.toggle('open')
  modal.classList.toggle('open')
}
