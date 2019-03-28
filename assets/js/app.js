(function ($) {
  "use strict"; // Start of use strict

  $(".menu").click(function () {
    $('body').toggleClass('overflow-hidden');
  });

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  $(window).scroll(function () {
    var scrollPos = $(this).scrollTop();
    var multiplier = 1200;

    $('.layer-1').css({
      'transform': 'scale(' + (1 + scrollPos / multiplier) + ')',
      'bottom': (scrollPos * .4) + 'px'
    });

    $('.bg-layer').css({
      'bottom': -(scrollPos*1.2) + 'px'
    });
    
  });

  $(window).on('load', function () {
    $(".song-preview").mouseenter(function () {
      $(this).find('img').addClass('blur');
      $(this).find('.overlay').hide('blur');
      var audio = $(this).find('audio')[0];
      audio.play().catch();
    }).mouseleave(function () {
      $(this).find('img').removeClass('blur');
      $(this).find('.overlay').show('blur');
      var audio = $(this).find('audio')[0];
      audio.pause();
    });
  });

  const cursor = document.querySelector("div.cursor");
  const menu = document.querySelector("div.menu");
  
  let mouseX = 0; 
  let mouseY = 0;
  let cursorX = 0;
  let cursorY = 0;
  let speed = .07;

  let cursorWidth = cursor.offsetWidth;
  let cursorHeight = cursor.offsetHeight;

  let menuTop = menu.offsetTop;
  let menuBottom = menu.offsetTop + menu.offsetHeight;
  let menuLeft = menu.offsetLeft;
  let menuRight = menu.offsetLeft + menu.offsetWidth;

  function animate() {
    let distX = mouseX - cursorX;
    let distY = mouseY - cursorY;

    cursorX = cursorX + (distX * speed);
    cursorY = cursorY + (distY * speed);

    cursor.style.top = cursorY + "px";
    cursor.style.left = cursorX + "px";

    if ((cursorX + cursorWidth) > menuLeft && (cursorX + cursorWidth) < (menuRight + cursorWidth) && (cursorY + cursorHeight) > menuTop && (cursorY + cursorHeight) < (menuBottom + cursorHeight)) {
      cursor.style.top = (menuTop + (cursorHeight/2)) + "px";
      cursor.style.left = (menuLeft + (cursorWidth/2)) + "px";
    }

    requestAnimationFrame(animate);
  }

  animate();

  document.addEventListener("mousemove", function (event) {
    mouseX = event.pageX;
    mouseY = event.pageY;
  })

})(jQuery); // End of use strict