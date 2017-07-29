$(document).ready(function(){

  //this is for nice scrolling the whole body
  $("html").niceScroll({
    scrollspeed: 100,
    mousescrollstep: 38,
    cursorwidth: 5,
    cursorborder: 0,
    cursorcolor: '#22a7f0',
    autohidemode: true,
    zindex: 999999999,
    horizrailenabled: false,
    cursorborderradius: 4,
  });

  //Scroll to top aimation
  //Check to see if the window is top if not then display button
  $(window).scroll(function(){
    if ($(this).scrollTop() > 140) {
      $('.scrollToTop').fadeIn();
    } else {
      $('.scrollToTop').fadeOut();
    }
  });
  
  //Click event to scroll to top
  $('.scrollToTop').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });

  //Search bars and icons on menu
  $(".search-icon").click(function(){
    $(".search-box").slideToggle("fast");
  });
  $(".search-icon-small").click(function(){
    $(".search-box").slideToggle("fast");
  });

  //Home page banner headings animations
  $(".animate1").addClass('animated zoomIn');
  $(".animate2").addClass('animated slideInUp');
  $(".animate3").addClass('animated slideInDown');

  //Catagori dropdown menu
  $(".categori-btn").click(function(){
    $("#categories").slideToggle("medium");
  });

});

function hideCategori_ul() {
  // For download page categories list
  var cat_ul = document.getElementById('categories');
  if((cat_ul.style.display = "none") && ($(window).width()>=768)) {
    cat_ul.style.display = "block";
  }
}
window.addEventListener('resize',hideCategori_ul);

//This is for google map
function initialize() {
    var mapOptions = {
        zoom: 17,
        center: new google.maps.LatLng(28.0598961, 73.2949638),
        mapTypeId: google.maps.MapTypeId.TERRAIN
     };
 
     var map = new google.maps.Map(document.getElementById('location-canvas'),
mapOptions);
 
    var marker = new google.maps.Marker({
        map: map,
        draggable: false,
        position: new google.maps.LatLng(28.0598961, 73.2949638)
    });

}
google.maps.event.addDomListener(window, 'resize', initialize);
google.maps.event.addDomListener(window, 'load', initialize);
