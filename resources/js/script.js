$(document).ready(function($) {
   
    $('.contact-us-panel input').each(function(e) {
        if ($(this).val() == "") {
           $(this).next().removeClass('non-empty');
       } else {
           $(this).next().addClass('non-empty');
       }
    });
    
    $('.contact-us-panel input').off('blur').on('blur', function(e) {
       if ($(this).val() == "") {
           $(this).next().removeClass('non-empty');
       } else {
           $(this).next().addClass('non-empty');
       }
    });
    
    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        
        loop: true,
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

       
      })

});