$(document).ready(function() {
    // Icon clicked to open mobile menu
    $("#mobileIcon").click(function(e) {
        toggleMobileMenu();
    });

    // Clicking outside of the mobile menu to close it
    $(document).click(function(e) {
        if ($("#mobileNav").css("display") != "none" && e.target.id == "mobileNav") {
            toggleMobileMenu();
        }
    });

    // When transitioning from small to large width, if menu is still open, close menu
    $(window).on('resize', navWindowResize);
    $(window).on('resize', resizeSlider);

    // Image slider
    var theInterval;

    function startSlide() {
        theInterval = setInterval(sliderFwd, 7000);
    }

    function stopSlide() {
        clearInterval(theInterval);
    }

    $(function () {
        startSlide();
        $('.sliderImg').hover(function () {
            stopSlide();
        }, function () {
            startSlide();
        });
    });

    slideIndex = 1;
    var slides = $(".sliderImg img");
    slides.css("display", "none");
    $(slides.get(slideIndex - 1)).fadeIn();
    resizeSlider();
    setTimeout(sliderFwd, 7000); // Change image every 7 seconds

    function sliderFwd() {
        $(slides.get(slideIndex - 1)).fadeOut(750);
        slideIndex ++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        $(slides.get(slideIndex - 1)).fadeIn(750);
        resizeSlider();
    }

    function sliderBck() {
        $(slides.get(slideIndex - 1)).fadeOut(750);
        slideIndex --;
        if (slideIndex < 1) {
            slideIndex = slides.length;
        }
        $(slides.get(slideIndex - 1)).fadeIn(750);
        resizeSlider();
    }

    function resizeSlider() {
        var maxHeight = Math.max.apply(null, $(".sliderImg").map(function () {
            return $(this).height();
        }).get());
        $(".sliderImgWrap").css("height", maxHeight);
    }

    $("#leftArrow").click(function() {
        stopSlide();
        sliderBck();
        startSlide();
    });

    $("#rightArrow").click(function() {
        stopSlide();
        sliderFwd();
        startSlide();
    });

    // Smooth Scrolling when clicking links
    // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top - 92
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

function toggleMobileMenu() {
    if ($("#mobileNav").css("display") == "none") {
        $("#mobileNav").fadeIn(250);
        $("#mobileNavContainer").slideDown(500);
    } else {
        $("#mobileNav").fadeOut(750);
        $("#mobileNavContainer").slideUp(500);
    }
}

function navWindowResize() {
  if ($(window).width() > 803 && $("#mobileNav").css("display") != "none") {
    toggleMobileMenu();
  }
}
