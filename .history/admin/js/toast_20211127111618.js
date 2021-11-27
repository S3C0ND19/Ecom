const alertNotification = document.querySelector('.alert')
function deleteAlert() {
    alertNotification.style.animation = 'hide_slide 1s ease forwards';
}
setTimeout(()=>{
        alertNotification.style.animation = 'hide_slide 1s ease forwards';
},4000);
setTimeout(() => {
      alertNotification.remove()
            }, 6000)
