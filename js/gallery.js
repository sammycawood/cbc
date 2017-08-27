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

        // Image slider
        var mySwiper = new Swiper ('.swiper-container', {
            // Optional parameters
            loop: true,
            initialSlide: that.modalIndex,

            // If we need pagination
            // pagination: '.swiper-pagination',

            // Navigation arrows
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev'
        });

        $(modal).fadeIn();
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

    // Clicking arrows when modal is open
    $("#leftArrow").click(function() {
        that.modalIndex--;
        if (that.modalIndex < 0) {
            that.modalIndex = pics.length - 1;
        }
        updateModal(that.modalIndex);
    });

    $("#rightArrow").click(function() {
        that.modalIndex++;
        if (that.modalIndex >= pics.length) {
            that.modalIndex = 0;
        }
        updateModal(that.modalIndex);
    });

    // Put in correct image into modal by index
    function updateModal(index) {
        $($(modal).find("img").get(0)).attr("src", $($(pics)[index]).find("img")[0].src);
    }

    // Make pictures load every 0.5s
    var index = 0;
    var galInt = setInterval(function() {
        $($(pics).get(index)).css("opacity", "1");
        index++;
        if (pics.length == index) {
            clearInterval(galInt);
        }
    }, 500);

    // Modal fits window at any size, make sure it's not too big
    function checkModalSize() {
        // Ignore this function for small devices
        if ($(window).width() < 768) {
            return;
        }

        var winHeight = parseFloat($(window).height() - $('header').height()); // Exclude header
        var winModWidth = parseFloat($(window).width());
        var modHeight = parseFloat($('.modal-content').height());
        var modWidth = parseFloat($('.modal-content').width());


        /*
        if () {
            $('.modal-content').css('width', 'auto');
            $('.modal-content').css('height', '');
        } else {
            $('.modal-content').css('width', '80%');
            $('.modal-content').css('height', 'auto');
        }
        */
    }
    $(window).resize(checkModalSize);
});
