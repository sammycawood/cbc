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

        landscape();
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

    $(window).on('resize', landscape);
});

function landscape () {
    // For mobile switching from portrait to landscape
    var modalHeight = parseInt($(".swiper-container").css("height")) + parseInt($(".modal").css("padding-top"));
    var modalWidth = parseInt($(".swiper-container").css("width"));
    var windowHeight = parseInt($(window).height());
    if (modalHeight > windowHeight) {

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
