const alertNotification = document.querySelector('.alert')
const getText = document.querySelectorAll('.textfill')
const getShowList = document.querySelector('.show-full-list');
const logo = document.querySelector('.header__logo');
const search = document.querySelector('.header__active');
const navbar = document.querySelector('.navbar-admin')
const content = document.querySelector('.content-main')
const active = document.querySelector('.modal-main')
getShowList.onclick = function (){
    logo.classList.toggle('list-hidden')
    search.classList.toggle('list-full')
    navbar.classList.toggle('list-hidden')
    content.classList.toggle('content-full')
    active.classList.toggle('content-full-2')
}

    function deleteAlert() {
        alertNotification.style.animation = 'hide_slide 1s ease forwards';
    }
    setTimeout(()=>{
            alertNotification.style.animation = 'hide_slide 1s ease forwards';
    },4000);
    setTimeout(() => {
        alertNotification.remove()
    }, 6000);
    
    getText.forEach( el => {
        if(el.innerText == 'User' || el.innerText == 'Ẩn' || el.innerText == 'Chưa Giao'){
           el.classList.add('fillred')
        }
    })
