

// Can also be used with $(document).ready()
$(window).load(function() {
    $('.flexslider').flexslider({
        animation: "slide"
    });
});

/* Accordion */

function openFirstPanel(){
    $('.accordion > dt:first-child').next().addClass('active').slideDown(500);
}

(function($) {

    var allPanels = $('.accordion > dd').hide();

    openFirstPanel();

    $('.accordion > dt > a').click(function() {
        $this = $(this);
        $target =  $this.parent().next();


        if($target.hasClass('active')){
            $target.removeClass('active').slideUp(500);
        }else{
            allPanels.removeClass('active').slideUp(500);
            $target.addClass('active').slideDown(500);
        }

        return false;
    });

})(jQuery);


/* Scroll */

$(document).ready(function() {
    $('a[href^="#"]').click(function(){
        var el = $(this).attr('href');
        $('body').animate({
            scrollTop: $(el).offset().top}, 1500);
        return false;
    });
});



