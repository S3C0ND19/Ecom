let getBtnSubmit = document.querySelector('.input-reviews-submit');
let getName = document.querySelector('.input-reviews-name');
let getEmail = document.querySelector('.input-reviews-email');
let getContent = document.querySelector('.input-reviews-content');
let reviews = document.querySelector('.reviews-content');
getBtnSubmit.onclick = function (){
    let name = getName.value;
    let email = getEmail.value;
    let content = getContent.value;
    reviews.textContent = "<li<p class='review-name'>By Lisa</p><p class='reiew-email'>lisa@gmail.com</p><span class='review-content'>San pham rat tot !</span></li>"
}
