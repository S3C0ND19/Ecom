const alertNotification = document.querySelector('.alert')
const getText = document.querySelectorAll('.textfill')
const getShowList = document.querySelector('.show-full-list');
const logo = document.querySelector('.header__logo');
const search = document.querySelector('header__active');
getShowList.onclick = function (){
    logo.classList.toggle('list-hidden')
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
