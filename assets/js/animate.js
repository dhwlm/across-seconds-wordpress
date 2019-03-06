(function ($) {
  "use strict"; // Start of use strict
  
  document.addEventListener('DOMContentLoaded', function () {
    //Wrapper animation
    anime.timeline({
      easing: "easeOutExpo",
      targets: ".welcome",
    })
    // .add({
    //   width: ["0vw", "100vw"],
    //   opacity: 1,
    //   duration: 1200,
    // })
    .add({
      targets: ".heading",
      opacity: 1,
      duration: 1200,
      translateY: ["-30px", "0px"],
      easing: "linear",
    })
    .add({
      targets: ".sub-heading",
      opacity: 1,
      duration: 1200,
      translateY: ["-30px", "0px"],
    })
    .add({
      targets: ".loader-wrapper",
      duration: 1800,
      opacity: 1,
      easing: "linear",
    })
    .add({
      targets: ".loader",
      duration: 2300,
      width: ["0", "100%"],
      complete: function (anime) {
        $('body').removeClass('welcome-anime');
      }
    })
    .add({
      translateX: "100vw",
      duration: 1200,
      complete: function (anime) {
        $('.welcome').remove();
      }
    })
    
  });
  
})(jQuery); // End of use strict