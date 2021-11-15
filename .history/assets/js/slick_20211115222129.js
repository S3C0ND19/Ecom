$('.variable-width').slick({
    centerMode: true,
    infinite: true,
    // centerPadding: '60px',
    slidesToShow: 1,
    speed: 300,
    variableWidth: true,
    // draggable: true,
    nextArrow:"<i class='slick-arrow right slick-prev pull-right ti-angle-right'></i>",
    prevArrow:"<i class='slick-arrow left slick-next pull-left ti-angle-left'></i>",
  });
//   $(document).ready(function(){
//     $('.slider').slick({
//         autoplay:true,
//         arrows: true,
        
//     });
// });
  $('.variable-width').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    var nextSlick = $( ".slick-slide[data-slick-index='"+nextSlide+"']" );
  });
  
  $('.variable-width').on('afterChange', function(event, slick, currentSlide){
  });
  setTimeout(()=>{
  }, 100);
  