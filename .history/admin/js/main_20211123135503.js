const getbtnAdd = document.querySelector('.btnAdd')
const modal = document.querySelector('.js-modal')
const modalClose = document.querySelector('.js-modal-close')
const dropZoneImg = document.querySelectorAll('.dropzone-img');
console.log(dropZoneImg)
getbtnAdd.onclick = function(){
    modal.style.display="flex"
}
modalClose.onclick = function(){
    modal.style.display="none"
}
