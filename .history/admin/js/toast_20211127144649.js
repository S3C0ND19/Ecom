const alertNotification = document.querySelector('.alert')
const getText = document.querySelectorAll('.textfill')
let getModalDelete = document.querySelector('.modal-delete');
let href = document.querySelector('.nohref')
function openModal(){
    getModalDelete.style.display='block';
    href.preventDefault();
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
