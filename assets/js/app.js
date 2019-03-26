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

  const cursor = document.querySelector("div.cursor");
  const menu = document.querySelector("div.menu");
  let mouseX = 0; 
  let mouseY = 0;
  let cursorX = 0;
  let cursorY = 0;
  let speed = .05;

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
      // cursor.style.display = 'none';
    }else{
      // cursor.style.display = 'block';
    }

    requestAnimationFrame(animate);
  }

  animate();

  document.addEventListener("mousemove", function (event) {
    mouseX = event.pageX;
    mouseY = event.pageY;
  })

  // document.addEventListener("mousedown", function () {
  //   cursor.style.transform = "scale(2)";
  // })
  // document.addEventListener("mouseup", function () {
  //   cursor.style.transform = "scale(1)";
  // })

})(jQuery); // End of use strict