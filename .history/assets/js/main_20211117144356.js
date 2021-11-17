const filterItemsElements =document.querySelector('.filter__oder-item')
const filterListElement = document.querySelectorAll('.filter__oder-list')
const getHeaderItems = document.querySelector('.header__nav-items')
const getHeaderList = document.querySelectorAll('.header__nav-lists a')


var slideIndex = 1;

filterListElement.forEach(el =>{
    el.addEventListener('click',function(e){
        filterItemsElements.querySelector('.active').classList.remove('active')
        el.classList.add('active')
    })
})

function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filter__products");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "filter__products-show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "filter__products-show");
    }
  }
  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
  }
  
  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);     
      }
    }
    element.className = arr1.join(" ");
  }
// var btnContainer = document.getElementsByClassName("filter__oder-item");
// var btns = btnContainer.getElementsByClassName("filter__oder-list");
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function(){
//     var current = document.getElementsByClassName("filter__products-active");
//     current[0].className = current[0].className.replace("filter__products-active", "");
//     this.className += "filter__products-active";
//   });
// }
$(document).ready(function(){
  $('.brand__container').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    arrows: false
  });
  $('.center').slick({
    centerMode: true,
    infinite: true,
    centerPadding: '60px',
    slidesToShow: 3,
    speed: 500,
    variableWidth: false,
  });
});
// slider

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("background");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";
  slides[slideIndex-1].style.animation ="fade-in linear 0.8s forwards"
  getDescription()
  getTilte()
  getBtn()
 
}
function getDescription() {
  var getText = document.querySelectorAll('.information__description')
  for(i = 0 ; i < getText.length; i++) {
    getText[i].style.display = "block"
    getText[i].style.animation = "animationDescription linear 0.5s forwards"
  }
} 
function getTilte(){
  var getTitle = document.querySelectorAll('.information__name')
  for(i = 0 ; i < getTitle.length; i++) {
    getTitle[i].style.display = "block"
    getTitle[i].style.animation = " animationTitle linear 0.5s forwards"
  }
}
function getBtn(){
  var getBtn = document.querySelectorAll('.information__shop-link')
  for(i = 0 ; i < getBtn.length; i++) {
    getBtn[i].style.display = "inline-block"
    getBtn[i].style.animation = "animationBtn linear 0.5s forwards"
  }
}
showSlides(slideIndex);










