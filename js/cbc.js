$(document).ready(function() {
    this.moving = false;

    // Icon clicked to open mobile menu
    $("#mobileIcon").click(function(e) {
        toggleMobileMenu();
    });

    // Clicking outside of the mobile menu or a link to close it
    /*$(document).click(function(e) {
        if ($("#mobileNav").css("display") != "none" && (e.target.id != "mobileNavContainer" && e.target.id != "mobileIcon")) {
            toggleMobileMenu();
        }
    });*/

    // Mobile menu click anywhere except mobile menu to exit
    $('#mobileNav').on('click', function(e) {
        if (e.target.id != "mobileNavContainer") {
            toggleMobileMenu();
        }
    });

    // When transitioning from small to large width, if menu is still open, close menu
    $(window).on('resize', navWindowResize);

    // Mobile device hover effect
    $('body').bind('touchstart', function() {});
});

function toggleMobileMenu() {
    that = this;
    if (that.moving) {
        return;
    }

    if ($("#mobileNav").css("display") == "none") {
        that.moving = true;
        $("#mobileNav").fadeIn(250);
        $("#mobileNavContainer").slideDown(500, function() {
            that.moving = false;
        });
    } else {
        that.moving = true;
        $("#mobileNav").fadeOut(750, function() {
            that.moving = false;
        });
        $("#mobileNavContainer").slideUp(500);
    }
}

function navWindowResize() {
  if ($(window).width() > 803 && $("#mobileNav").css("display") != "none") {
    toggleMobileMenu();
  }
}
