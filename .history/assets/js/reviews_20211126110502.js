let getBtnSubmit = document.querySelector('.input-reviews-submit');
let getName = document.querySelector('.input-reviews-name');
let getEmail = document.querySelector('.input-reviews-email');
let getContent = document.querySelector('.input-reviews-content');
let reviews = document.querySelector('.reviews-content');
getBtnSubmit.onclick = function (){
    reviews.querySelector('li').forEach((li) => {
        let liTag = `
            <li> 
                <p class="review-name">By ${getName.value}</p>
                <p class="reiew-email">${getName.value}</p>
                <span class="review-content">${getContent.value}</span>
            </li>
        `
        reviews.insertAdjacentHTML('afterbegin' ,liTag)
    })
}
