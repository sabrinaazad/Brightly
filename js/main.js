/*
*
* Brightly Network Javascript/JQuery
* Author: Sabrina Azad
* 
*/

$(document).ready(function(){
  
  var menuIcon = $('#menu');
  var mainMenu = $('.mobile-nav');
  var menuLink = $('.mobile-nav a');
  var mhWrapper = $('.match-height-wrapper');
  
  menuIcon.click(function() {
    $(this).toggleClass("fa-bars fa-close");
    mainMenu.slideToggle(); 
  });

  menuLink.click(function() {
    mainMenu.slideUp();
    menuIcon.toggleClass("fa-bars fa-close");

  mhWrapper.matchHeight(); 

    $('html, body').animate({
        scrollTop: $( $.attr( this, 'href') ).offset().top
    }, 500);
    return false;
  });
  
  //document.getElementById("heroVideo").addEventListener("ended",videoEnd,false);
    
    // function videoEnd(e) {
    //     $("#heroVideo").css('opacity', '0');
    //     $(".brightly-logo").css('opacity', '1');
    //     $('.hero-text').addClass('loaded');
    // }

  var formtext = $('.form-text'),
      extra = 10; // In case you want to trigger it a bit sooner than exactly at the bottom.

  /* Every time the window is scrolled ... */
    $(window).scroll( function(){
            
      var company_logos = $('#sectionThree').position().top + $('#sectionThree').outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();
             
      /* If the object is completely visible in the window, pulse it */
      if( bottom_of_window > company_logos ) {
          
          $( '#sectionThree .match-height-wrapper' ).css({
            animation: 'PulseContent 1s',
          });               
      }

      var scrolledLength = ( $(window).height() + extra ) + $(window).scrollTop(),
         documentHeight = $(document).height();

      if( scrolledLength >= documentHeight ) {

         formtext
            .stop().animate({ bottom: '0', opacity: '1' }, 300);

      }
    });

// Get the id of the <path> element and the length of <path>
var line = document.getElementById("line");
var length = line.getTotalLength();

// The start position of the drawing
line.style.strokeDasharray = length;

// Hide the line by offsetting dash. Remove this line to show the line before scroll draw
line.style.strokeDashoffset = length;

// Find scroll percentage on scroll (using cross-browser properties), and offset dash same amount as percentage scrolled
window.addEventListener("scroll", myFunction);

function myFunction() {
  var scrollpercent = (document.body.scrollTop + document.documentElement.scrollTop  - 180 ) / (document.documentElement.scrollHeight - document.documentElement.clientHeight - 25);

  var draw = length * scrollpercent;

  // Reverse the drawing (when scrolling upwards)
  line.style.strokeDashoffset = length - draw;
}

});
