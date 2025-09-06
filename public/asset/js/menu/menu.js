$( document ).ready(function() {
    $('.parent-link').on('click',()=>{
        if ($(this).find('.sub-menu').hasClass('expanded')){
            $(this).find('.sub-menu').removeClass('expanded');
        }else {
            $(this).find('.sub-menu').addClass('expanded');
        }
    })
});
