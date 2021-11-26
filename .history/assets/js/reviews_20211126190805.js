let getBtnSubmit = document.querySelector('.input-reviews-submit');
let getName = document.querySelector('.input-reviews-name');
let getEmail = document.querySelector('.input-reviews-email');
let getContent = document.querySelector('.input-reviews-content');
let reviews = document.querySelector('.reviews-content');
let start = document.querySelector('.review-star');
console.log(start)
getBtnSubmit.onclick = function (){
    reviews.querySelectorAll('li')
        let liTag = `
            <li class="review-list"> 
                <p class="review-name">By ${getName.value}</p>
                <p class="reiew-email">${getEmail.value}</p>
                <span class="review-content">${getContent.value}</span>
            </li>
        `      
        reviews.insertAdjacentHTML('beforeend' ,liTag)
        getName.value = '';
        getEmail.value ='' ;
        getContent.value ='';
  
}
start.forEach(function(e){
    e.onclick = function (ev){
        ev.classList.toggle('vote-start');
    }
})
