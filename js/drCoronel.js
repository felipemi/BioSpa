$(document).ready(function() {
    //  Initialize Backgound Stretcher
    $('BODY').bgStretcher({
        images: ['images/slide-1.jpg'],
        imageWidth: 1600,
        imageHeight: 964,
        resizeProportionally: true
    });
    $('#carousel').elastislide({imageW: 300, margin: 20, minItems: 3});
    $('.magnifier').fancybox();


    $(".view").hover(
            function() {
                $(this).find("img").stop().animate({opacity: 0.5}, "normal")
            },
            function() {
                $(this).find("img").stop().animate({opacity: 1}, "normal")
            })
});
	     	