// 首页：项目展示
jQuery(document).ready(function() {
  var owl = jQuery('.owl-carousel');
  owl.owlCarousel({
    margin: 40,
    nav: true,
    loop: true,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 4
      }
    }
  })
})


// Page scroll to go top
document.addEventListener("DOMContentLoaded", function(){
     let pagescrolltop = document.getElementsByClassName('ct-scroll-top');
    // If class exists
    if (pagescrolltop.length > 0) {
      window.addEventListener('scroll', function() {
          if (window.scrollY > 200) {
            document.getElementById('page-scroll-top').classList.add('on');
           // document.body.style.paddingTop = 22 + 'px';
          } else {
             //  document.body.style.paddingTop = 0;
            document.getElementById('page-scroll-top').classList.remove('on');
          }
      });
    }
});


( function ($) {
  // remove box on click
    $("a").keypress(function() {
       this.blur();
       this.hideFocus = false;
       this.style.outline = null;
        });
        $("a").mousedown(function() {
             this.blur();
             this.hideFocus = true;
             this.style.outline = 'none';
        });
/* ---------------------------------------------- /*
         * Home section height
         /* ---------------------------------------------- */

        function CLOUDPRESS_buildHomeSection(homeSection) {
            if (homeSection.length > 0) {
                if (homeSection.hasClass('home-full-height')) {
                    homeSection.height($(window).height());
                } else {
                    homeSection.height($(window).height() * 0.85);
                }
            }
        }

// Fullscreen Serach Box

    $(function() {
      $('a[href="#searchbar_fullscreen"]').on("click", function(event) {

        event.preventDefault();
        $("#searchbar_fullscreen").addClass("open");
        $('#searchbar_fullscreen > form > input[type="search"]').focus();
      });

      $("#searchbar_fullscreen, #searchbar_fullscreen button.close").on("click keyup", function(event) {
        if (
          event.target == this ||
          event.target.className == "close" ||
          event.keyCode == 27
        ) {
          $(this).removeClass("open");
        }
      });

    });


        jQuery('a,input').bind('focus', function() {
             if(!jQuery(this).closest(".menu-item").length ) {
                jQuery("li.dropdown ul").css("display", "none");
            }
       })

      jQuery('a,input').bind('focus', function() {
             if(!jQuery(this).closest(".menu-item").length && ( jQuery(window).width() <= 992) ) {
                jQuery('.navbar-collapse').removeClass('show');
      }})

})(jQuery);
