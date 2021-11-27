const alertNotification = document.querySelector('.alert')
const getText = document.querySelectorAll('.textfill')
let getModalDelete = document.querySelector('.modal-delete');
let getDelete = document.querySelector('btnConfirmDelete');
let href = document.querySelector('.addhref')
function openModal(){
    getModalDelete.style.display='block';
}
function hideModal(){
    getModalDelete.style.display='none';
    window.onclick = e => {
        if(e.target.innerText == 'Delete'){

        }  
        
    } 

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
