$('.variable-width').slick({
    centerMode: true,
    infinite: true,
    // centerPadding: '60px',
    slidesToShow: 1,
    speed: 300,
    variableWidth: true,
    // draggable: true,
  });
  
  $('.variable-width').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    //console.log('beforeChange', currentSlide, nextSlide);
    // $(".slick-current").removeClass("high-light");
    // $(".slick-current").addClass("normal");
    //console.log($( ".slick-slide[data-slick-index='"+nextSlide+"']" ));
    var nextSlick = $( ".slick-slide[data-slick-index='"+nextSlide+"']" );
    // nextSlick.addClass("high-light");
    // nextSlick.removeClass("normal");
  });
  
  $('.variable-width').on('afterChange', function(event, slick, currentSlide){
    //console.log('afterChange', currentSlide);
    //$(".slick-current").addClass("high-light");
    //$(".slick-current").removeClass("normal");
  });
  setTimeout(()=>{
    //console.log($(".slick-current"));
    // $(".slick-current").removeClass("normal");
    // $(".slick-current").addClass("high-light");
    //$('.variable-width').slick('setPosition');
  }, 100);
  