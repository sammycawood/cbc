$(document).ready(function() {
    that = this;
    this.sections = ["#ourStory", "#buildingProcess"];
    this.sectionOffsets = []
    $.each(that.sections, function(i, val) {
        that.sectionOffsets.push($(val).offset().top);
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
                }, 800, function(){});
        } // End if
    });

    // Image slider
    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        autoHeight: false,
        autoplay: 7000,
        autoplayDisableOnInteraction: false,
        loop: true,
        paginationClickable: true,


        // If we need pagination
        pagination: '.swiper-pagination',

        // Navigation arrows
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
    });

    $(window).on('scroll', navScroll);

    function navScroll () {
        if (typeof that.sectionOffsets == 'undefined') {
            return false;
        }
        
        $(".menu li").removeClass("active");
        var scrollLoc = $(window).scrollTop() + 94;
        if (scrollLoc < that.sectionOffsets[0]) {
            // At the top section
            $("#topMenu").addClass("active");
        } else if (scrollLoc > that.sectionOffsets[that.sectionOffsets.length - 1]) {
            // In last section
            $(that.sections[that.sections.length - 1] + "Menu").addClass("active");
        } else {
            $.each(that.sectionOffsets, function(i, val) {
                if (scrollLoc > val && scrollLoc < that.sectionOffsets[i+1]) {
                    $(that.sections[i] + "Menu").addClass("active");
                    return false;
                }
            });
        }
    }
});
