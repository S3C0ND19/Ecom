
let getCart = document.querySelector('.headerr__active-list.cart');
let getShadow = document.querySelector('.cart-shadow');
let modal = document.querySelector('.modal');
let id = document.querySelectorAll('.id-hidden')
let result =[];
id.forEach(function (e){
  result.push(e.value);
})
var idget= [];
for (let i = 0 ; i < result.length ; i++ ){
 idget = result[i];
}
console.log(idget)


// }
// getShadow.addEventListener('click',hideBuyTickets);
getCart.onclick = function (){
  getShadow.classList.toggle('open')
  modal.classList.toggle('open')
}
