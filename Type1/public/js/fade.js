$(function(){
    $('body').hide().fadeIn('fast');
    $('a').click(function(){
        var link = $(this).attr('href');
        $('body').fadeOut('fast', function(){
            window.location.href = link;
        });
        return false;
    });
});
