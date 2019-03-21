(function ($) {
  "use strict"; // Start of use strict
  
  $(document).on('click','.menu.open',function(){

    $(this).addClass("close").removeClass("open");
    anime.timeline({
      targets: ".menu-container",
      easing: "easeOutExpo",
    })
    .add({
      width: ["0vw", "100vw"],
      opacity: [0,1],
      duration: 1000,
    })
    .add({
      targets: ".menu-items li",
      opacity: [0, 1],
      translateY: ["30px", "0px"],
      delay: (el, i ) => 100 * i
    },"-=500")
  });

  $(document).on('click', '.menu.close',function(){
    
    $(this).addClass("open").removeClass("close");

    anime.timeline({
      targets: ".menu-container",
      easing: "easeOutExpo",
    })
    .add({
      targets: ".menu-items li",
      opacity: [1, 0],
      translateY: ["0px", "30px"],
      delay: (el, i ) => 100 * i
    })
    .add({
      width: ["100vw", "0vw"],
      opacity: [1,0],
      duration: 700,
    },"-=300")
    
  });

})(jQuery); // End of use strict