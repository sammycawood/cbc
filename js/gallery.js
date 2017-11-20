$(document).ready(function() {
    // Slide image index that is currently showing
    this.modalIndex = 0;
    that = this;

    // Gallery pictures
    var pics = $(".galImg");

    // Get the modal
    var modal = $('#cbcModal');

    // Get the <span> element that closes the modal
    var close = $(".close").get(0);

    // When the user clicks on the button, open the modal
    $(pics).click(function() {
        that.modalIndex = parseInt($(this)[0].id);
        var ndx = that.modalIndex;
        $(modal).fadeIn();

        // Image slider
        var mySwiper = new Swiper ('.swiper-container', {
            // Optional parameters
            autoHeight: true,
            effect: "coverflow",
            initialSlide: ndx,
            keyboardControl: true,
            loop: true,

            // If we need pagination
            // pagination: '.swiper-pagination',

            // Navigation arrows
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev'
        });
    });

    // When the user clicks on 'x', close the modal
    $(close).click(function() {
        $(modal).fadeOut();
    });

    // When the user clicks anywhere outside of the modal, close it
    $(window).click(function(event) {
        if (event.target.id == $(modal)[0].id) {
            $(modal).fadeOut();
        }
    });

    $(window).on('resize', sizeSwiper);
});



function sizeSwiper () {
    console.log("HI");
    // For mobile switching from portrait to landscape
    var windowHeight = parseInt($(window).height());
    var windowWidth = parseInt($(window).width());
    var topPadding = parseInt($(".modal").css("padding-top"));
    if (windowHeight > windowWidth) {
        // Width is min side
        $(".swiper-container").css("width", "100%");
    } else {
        // Height is min side
        $(".swiper-container").css("width", (windowHeight - (topPadding * 2)) * 3 / 2);
    }

}

$(window).on('load', function() {
    var pics = $(".galImg");
    // Make pictures load every 0.5s
    var index = 0;
    var galInt = setInterval(function() {
        $($(pics).get(index)).css("opacity", "1");
        index++;
        if (pics.length == index) {
            clearInterval(galInt);
        }
    }, 300);
});
