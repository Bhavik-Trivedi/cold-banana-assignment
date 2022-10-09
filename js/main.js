$(document).ready(function(){
    $(window).scroll(function(){
        var main_header = $('header'),
        scroll = $(window).scrollTop();
        if (scroll >= 10) main_header.addClass('headerbg');
        else main_header.removeClass('headerbg');
    });
});

$(document).on('click','.nav-item .nav-link', function(e){
    $('header .nav-link').removeClass('active');
    $(this).addClass('active');
    $('header .menu').removeClass('opened');
    $('header .navbar-collapse').removeClass('show');
    $('body').removeClass('bodyoverflow');
});

$('.scrolls').click(function(evt) { 
    var $anchor = $(this); 
    $('html, body').stop().animate({ 
        scrollTop: $($anchor.attr('href')).offset().top-91
    }, 1000);
    evt.preventDefault(); 
});

$(document).ready(function() {
  $('.col-md-4').hide();
   $('.col-md-4').each(function(index,value) {
     if(index < 3) {
       $(this).show();
     }
   });
  if($('.col-md-4:hidden').length) {
    $('#more').show();
  }
  if(!$('.col-md-4:hidden').length) {
      $('#more').hide();
    }
  
});

$('#more').on('click', function() {
    $('.col-md-4:hidden').each(function(index, value) {
       if(index < 3) {
         $(this).show();
       }
    });
    if(!$('.col-md-4:hidden').length) {
      $('#more').hide();
    }
});