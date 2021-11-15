$('.variable-width').slick({
    centerMode: true,
    infinite: true,
    slidesToShow: 1,
    speed: 300,
    variableWidth: true,
    nextArrow:"<i class='slick-arrow right slick-prev pull-right ti-angle-right'></i>",
    prevArrow:"<i class='slick-arrow left slick-next pull-left ti-angle-left'></i>",
  });
  $('.variable-width').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    var nextSlick = $( ".slick-slide[data-slick-index='"+nextSlide+"']" );
  });
  
  $('.variable-width').on('afterChange', function(event, slick, currentSlide){
  });
  setTimeout(()=>{
  }, 100);
  