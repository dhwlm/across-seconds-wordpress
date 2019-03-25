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
  let mouseX = 0; 
  let mouseY = 0;
  let cursorX = 0;
  let cursorY = 0;
  let speed = .1;

  function animate() {
    let distX = mouseX - cursorX;
    let distY = mouseY - cursorY;

    cursorX = cursorX + (distX * speed);
    cursorY = cursorY + (distY * speed);

    cursor.style.top = cursorY + "px";
    cursor.style.left = cursorX + "px";

    requestAnimationFrame(animate);
  }

  animate();

  document.addEventListener("mousemove", function (event) {
    mouseX = event.pageX;
    mouseY = event.pageY;
  })

  document.addEventListener("mousedown", function () {
    cursor.style.transform = "scale(2)";
  })
  document.addEventListener("mouseup", function () {
    cursor.style.transform = "scale(1)";
  })

})(jQuery); // End of use strict