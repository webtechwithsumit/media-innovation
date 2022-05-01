$('#portfolio .portfolio-item .portfolio-item-wrap .portfolio-image').mouseover(function () {
    $(this).children('.portfolio-item .portfolio-item-wrap .portfolio-image a img').slideUp();
    $(this).children('.portfolio-item .portfolio-item-wrap .portfolio-description').slideUp();
    $(this).children('.portfolio-item .portfolio-item-wrap .portfolio-description').css('display', 'flex');
});

$('#portfolio .portfolio-item .portfolio-item-wrap .portfolio-description').mouseleave(function () {
    $(this).children('..portfolio-item .portfolio-item-wrap .portfolio-image').slideDown();
    $(this).children('.portfolio-item .portfolio-item-wrap .portfolio-description').slideDown();
});