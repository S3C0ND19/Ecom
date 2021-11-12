const getbtnAdd = document.querySelector('.btnAdd')
const modal = document.querySelector('.js-modal')
const modalClose = document.querySelector('.js-modal-close')
const getbtnEditBrand = document.querySelector('.btnEditBrand')

const modalEditBrand = document.querySelector('.modal__edit-product')
getbtnAdd.onclick = function(){
    modal.style.display="flex"
}
getbtnEditBrand.onclick = function(){
    modalEditBrand.style.display="flex"
}
modalClose.onclick = function(){
    modal.style.display="none"
}
modal__edit-product 