
   // carousel-4 
   $('.carousel_1').owlCarousel({
      loop:true,
      margin:10,
      items: 1,
      responsiveClass:true,
  })
  
//   scroll
$(document).ready(function() {
   $(window).scroll(function() {
      if($(document).scrollTop()>100)
      {
         $(".navigation_section").addClass("nav_bg");
      }else {
         $('.navigation_section').removeClass('nav_bg');
      }
   })
})
