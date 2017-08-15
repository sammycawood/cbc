$(document).ready(function() {
    // Icon clicked to open mobile menu
    $("#mobileIcon").click(function(e) {
        toggleMobileMenu();
    });

    // Clicking outside of the mobile menu or a link to close it
    $(document).click(function(e) {
        if ($("#mobileNav").css("display") != "none" && (e.target.id != "mobileNavContainer" && e.target.id != "mobileIcon")) {
            toggleMobileMenu();
        }
    });

    // When transitioning from small to large width, if menu is still open, close menu
    $(window).on('resize', navWindowResize);
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
